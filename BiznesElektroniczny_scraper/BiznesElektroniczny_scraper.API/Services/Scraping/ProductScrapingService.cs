using System.Text.RegularExpressions;
using BiznesElektroniczny_scraper.API.Models;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Newtonsoft.Json;
using PuppeteerSharp;

namespace BiznesElektroniczny_scraper.API.Services.Scraping;

public class ProductScrapingService(
    HttpClient httpClient,
    IConfiguration configuration,
    ILogger<ProductScrapingService> logger) {
    private readonly string _jsonPath = configuration["Paths:ProductsJsonPath"]!;
    private readonly string _imgDirectoryPath = configuration["Paths:ImgDirectoryPath"]!;
    private readonly string _browserPath = configuration["Paths:BrowserPath"]!;

    private IBrowser _browser = null!;

    public async Task ScrapeAsync(string pageUrl) {
        await PrepareAsync();

        try {
            await using var page = await _browser.NewPageAsync();

            List<Product> products = [];

            await page.GoToAsync(pageUrl);

            // Determine the amount of pages to scrape

            await page.WaitForSelectorAsync("div.innerbox .floatcenterwrap ul li");
            var paginationElements = await page.QuerySelectorAllAsync("div.innerbox .floatcenterwrap ul li a");

            // Get the one element before the last one, because the last one is the next page button
            var lastPageElement = paginationElements[^2];

            var amountOfPages = await lastPageElement.EvaluateFunctionAsync<int>("e => parseInt(e.innerText)");

            for (var pageNumber = 1; pageNumber <= amountOfPages; pageNumber++) {
                if (pageNumber == 1) {
                    await ScrapePage(pageUrl, products, page);
                }
                else {
                    var uri = $"{pageUrl}/{pageNumber}";
                    await ScrapePage(uri, products, page);
                }
            }

            await SerializeToJsonAsync(products);
        }
        catch (Exception e) {
            logger.LogError(e, "Error while scraping products");
        }
        finally {
            await _browser.CloseAsync();
        }
    }

    private async Task ScrapePage(string uri, ICollection<Product> products, IPage page) {
        await page.GoToAsync(uri);

        await page.WaitForSelectorAsync(".products.viewdesc");
        await page.WaitForSelectorAsync(".oneperrow.f-row.product");

        var allProductDivs = await page.QuerySelectorAllAsync(".oneperrow.f-row.product");

        var categoryNameElement = await page.QuerySelectorAsync("h1.category-name");
        var categoryName = await categoryNameElement.EvaluateFunctionAsync<string>("e => e.innerText");

        foreach (var productElement in allProductDivs) {
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

            var product = new Product {
                Title = titleName,
                Manufacturer = manufacturerName,
                CategoryName = categoryName,
                Price = price
            };

            await GetDetailsAsync(productUrl, product);

            products.Add(product);
        }
    }

    private async Task SerializeToJsonAsync(List<Product> products) =>
        await File.WriteAllTextAsync(_jsonPath, JsonConvert.SerializeObject(products, Formatting.Indented));

    private async Task GetDetailsAsync(string productUrl, Product product) {
        await using var page = await _browser.NewPageAsync();

        await page.GoToAsync(productUrl);

        await page.WaitForSelectorAsync("div.row.code.codeisbn span");
        var isbnElement = await page.QuerySelectorAsync("div.row.code.codeisbn span");

        var isbn = await isbnElement.EvaluateFunctionAsync<string>("e => e.innerText");
        product.Isbn = isbn;

        var descriptionElement = await page.QuerySelectorAsync("div.product-modules");
        var descriptionParagraphs = await descriptionElement.QuerySelectorAllAsync("p");

        var descriptionText = descriptionParagraphs.Length == 0
            ? "No description"
            : await descriptionParagraphs.First().EvaluateFunctionAsync<string>("e => e.innerText");
        product.Description = descriptionText;

        var photoElement = await page.QuerySelectorAsync("div.mainimg.productdetailsimgsize.row a");
        if (photoElement is not null) {
            var photoUrl = await photoElement.EvaluateFunctionAsync<string>("e => e.href");

            var imgPath = await SaveImgAsync(photoUrl);
            product.ImgPath = imgPath;
        }
    }

    private async Task<string> SaveImgAsync(string photoUrl) {
        try {
            var fileName = Path.GetFileName(photoUrl);
            var filePath = Path.Combine(_imgDirectoryPath, fileName);

            var response = await httpClient.GetStreamAsync(photoUrl);

            await using var fileStream = new FileStream(filePath, FileMode.Create);
            await response.CopyToAsync(fileStream);

            return filePath;
        }
        catch (Exception e) {
            logger.LogError(e, "Error while saving image");
            return "No image";
        }
    }

    private async Task PrepareAsync() {
        try {
            var browserFetcher = Puppeteer.CreateBrowserFetcher(new BrowserFetcherOptions {
                Path = null
            });

            await browserFetcher.DownloadAsync(BrowserTag.Stable);

            _browser = await Puppeteer.LaunchAsync(new LaunchOptions {
                Headless = false,
                ExecutablePath = _browserPath,
                DefaultViewport = new ViewPortOptions {
                    Width = 1920,
                    Height = 1080
                }
            });
        }
        catch (Exception e) {
            logger.LogError(e, "Error while preparing browser");
        }
    }
}