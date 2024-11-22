using System.Collections.Concurrent;
using System.Text.RegularExpressions;
using BiznesElektroniczny_scraper.API.Models;
using Newtonsoft.Json;
using PuppeteerSharp;

namespace BiznesElektroniczny_scraper.API.Services.Scraping;

public class ProductScrapingService(
    HttpClient httpClient,
    IConfiguration configuration,
    ILogger<ProductScrapingService> logger)
{
    private readonly string _jsonPath = configuration["Paths:ProductsJsonPath"]!;
    private readonly string _jsonCategoryPath = configuration["Paths:CategoriesJsonPath"]!;
    private readonly string _imgDirectoryPath = configuration["Paths:ImgDirectoryPath"]!;
    private readonly string _browserPath = configuration["Paths:BrowserPath"]!;

    //private IBrowser _browser = null!;
    private readonly ConcurrentBag<IBrowser> _browsers = [];

    public async Task ScrapeAsync(params string[] pageUrls)
    {
        await PrepareAsync(pageUrls.Length);

        try
        {
            ConcurrentBag<Product[]> finalProducts = [];

            var zipped = pageUrls
                .Zip(_browsers, (pageUrl, browser) => (pageUrl, browser));

            await Parallel.ForEachAsync(zipped, new ParallelOptions
            {
                MaxDegreeOfParallelism = 5
            }, async (pageBrowser, _) =>
            {
                try
                {
                    var (pageUrl, browser) = pageBrowser;

                    List<Product> products = [];

                    await using var page = await browser.NewPageAsync();

                    await page.GoToAsync(pageUrl);

                    // Determine the amount of pages to scrape

                    await page.WaitForSelectorAsync("div.innerbox .floatcenterwrap ul li");
                    var paginationElements = await page.QuerySelectorAllAsync("div.innerbox .floatcenterwrap ul li a");

                    // Get the one element before the last one, because the last one is the next page button
                    var lastPageElement = paginationElements[^2];

                    var amountOfPages = await lastPageElement.EvaluateFunctionAsync<int>("e => parseInt(e.innerText)");

                    amountOfPages = amountOfPages > 10 ? 10 : amountOfPages;

                    for (var pageNumber = 1; pageNumber <= amountOfPages; pageNumber++)
                    {
                        try
                        {
                            if (pageNumber == 1)
                            {
                                await ScrapePage(pageUrl, products, page, browser);
                            }
                            else
                            {
                                var uri = $"{pageUrl}/{pageNumber}";
                                await ScrapePage(uri, products, page, browser);
                            }
                        }
                        catch (Exception e)
                        {
                            logger.LogError(e, "Error while scraping page: {url}/{pageNo}", pageUrl, pageNumber);
                            continue;
                        }
                    }

                    finalProducts.Add(products.ToArray());

                    await browser.CloseAsync();
                }
                catch (Exception e)
                {
                    logger.LogError(e, "Error while scraping page");
                }
            });

            await SerializeToJsonAsync(finalProducts.SelectMany(p => p));
        }
        catch (Exception e)
        {
            logger.LogError(e, "Error while scraping products");
        }
        finally
        {
            foreach (var browser in _browsers.Where(b => !b.IsClosed))
                await browser.CloseAsync();
        }
    }

    private async Task ScrapePage(string uri, ICollection<Product> products, IPage page, IBrowser assignedBrowser)
    {
        await page.GoToAsync(uri);

        await page.WaitForSelectorAsync(".products.viewdesc");
        await page.WaitForSelectorAsync(".oneperrow.f-row.product");

        var allProductDivs = await page.QuerySelectorAllAsync(".oneperrow.f-row.product");

        var categoryName = Regex.Replace(uri.Replace("https://www.atomcomics.pl/kategoria/", ""), @"/\d+$", "");
        var categoryPath = categoryName.Split('/');

        foreach (var productElement in allProductDivs)
        {
            await productElement.WaitForSelectorAsync(".product-details-list");

            var titleNameElement = await productElement.QuerySelectorAsync("span.productname");
            var manufacturerNameElement = await productElement.QuerySelectorAsync("span.productmanu");

            var titleName = await titleNameElement.EvaluateFunctionAsync<string>("e => e.innerText");
            var manufacturerName = await manufacturerNameElement.EvaluateFunctionAsync<string>("e => e.innerText");

            var outerPriceElement = await productElement.QuerySelectorAsync("div.price");
            var innerPriceElement = await outerPriceElement.QuerySelectorAsync("em");

            var priceText = await innerPriceElement.EvaluateFunctionAsync<string>("e => e.innerText");

            const string pattern = @"(\d+,\d+)";
            var price = decimal.Parse(Regex.Match(priceText, pattern).Value.Replace(',', '.'));

            var productUrlElement = await productElement.QuerySelectorAsync("a.prodname");
            var productUrl = await productUrlElement.EvaluateFunctionAsync<string>("e => e.href");

            var product = new Product
            {
                Title = titleName,
                Manufacturer = manufacturerName,
                CategoryName = categoryPath[0],
                SubcategoryName = categoryPath.Length > 1 ? categoryPath[1] : "No subcategory",
                Price = price
            };

            await GetDetailsAsync(productUrl, product, assignedBrowser);

            products.Add(product);

            await Task.Delay(TimeSpan.FromSeconds(2));
        }
    }

    private async Task SerializeToJsonAsync(IEnumerable<Product> products)
    {
        var enumerable = products as Product[] ?? products.ToArray();
        var json = JsonConvert.SerializeObject(enumerable.DistinctBy(p => p.Title), Formatting.Indented);
        await File.WriteAllTextAsync(_jsonPath, json);
    }

    private async Task GetDetailsAsync(string productUrl, Product product, IBrowser assignedBrowser)
    {
        await using var page = await assignedBrowser.NewPageAsync();

        await page.GoToAsync(productUrl);

        try
        {
            await page.WaitForSelectorAsync("div.row.code.codeisbn span", new WaitForSelectorOptions
            {
                Timeout = 5000
            });
            var isbnElement = await page.QuerySelectorAsync("div.row.code.codeisbn span");

            var isbn = await isbnElement.EvaluateFunctionAsync<string>("e => e.innerText");
            product.Isbn = isbn;
        }
        catch (Exception e)
        {
            logger.LogError(e, "Error while getting ISBN");
            product.Isbn = "No ISBN";
        }

        try
        {
            var descriptionElement = await page.QuerySelectorAsync("div.product-modules");
            var descriptionParagraphs = await descriptionElement.QuerySelectorAllAsync("p");

            var descriptionText = descriptionParagraphs.Length == 0
                ? "No description"
                : await descriptionParagraphs.First().EvaluateFunctionAsync<string>("e => e.innerText");
            product.Description = descriptionText;
        }
        catch (Exception e)
        {
            logger.LogError(e, "Error while getting description");
            product.Description = "No description";
        }

        try
        {
            var photoElement = await page.QuerySelectorAsync("div.mainimg.productdetailsimgsize.row a");
            if (photoElement is not null)
            {
                var photoUrl = await photoElement.EvaluateFunctionAsync<string>("e => e.href");

                var imgPath = await SaveImgAsync(photoUrl);
                product.ImgPath = imgPath;
            }
        }
        catch (Exception e)
        {
            logger.LogError(e, "Error while getting photo");
            product.ImgPath = "No image";
        }
    }

    private async Task<string> SaveImgAsync(string photoUrl)
    {
        try
        {
            var fileName = $"{Guid.NewGuid()}{Path.GetExtension(photoUrl)}";
            var filePath = Path.Combine(_imgDirectoryPath, fileName);

            var response = await httpClient.GetStreamAsync(photoUrl);

            await using var fileStream = new FileStream(filePath, FileMode.Create);
            await response.CopyToAsync(fileStream);

            return filePath;
        }
        catch (Exception e)
        {
            logger.LogError(e, "Error while saving image");
            return "No image";
        }
    }

    private async Task PrepareAsync(int count = 4)
    {
        try
        {
            var browserFetcher = Puppeteer.CreateBrowserFetcher(new BrowserFetcherOptions
            {
                Path = null
            });

            await browserFetcher.DownloadAsync(BrowserTag.Stable);

            for (var i = 0; i < count; i++)
            {
                var browser = await Puppeteer.LaunchAsync(new LaunchOptions
                {
                    Headless = false,
                    ExecutablePath = _browserPath,
                    DefaultViewport = new ViewPortOptions
                    {
                        Width = 1920,
                        Height = 1080
                    }
                });

                _browsers.Add(browser);
            }
        }
        catch (Exception e)
        {
            logger.LogError(e, "Error while preparing browser");
        }
    }
}