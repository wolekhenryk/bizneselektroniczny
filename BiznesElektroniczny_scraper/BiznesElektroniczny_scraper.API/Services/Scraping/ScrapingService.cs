using System.Text.RegularExpressions;
using BiznesElektroniczny_scraper.API.Models;
using Newtonsoft.Json;
using PuppeteerSharp;

namespace BiznesElektroniczny_scraper.API.Services.Scraping;

public class ScrapingService(HttpClient httpClient, IConfiguration configuration) {
    private readonly string _jsonPath = configuration["Paths:JsonPath"]!;
    private readonly string _imgDirectoryPath = configuration["Paths:ImgDirectoryPath"]!;
    private readonly string _browserPath = configuration["Paths:BrowserPath"]!;

    private IBrowser _browser;

    public async Task ScrapeAsync() {
        await PrepareAsync();

        try {
            await using var page = await _browser.NewPageAsync();

            await page.GoToAsync("https://www.atomcomics.pl/kategoria/bohaterowie/komiksy-avengers");

            await page.WaitForSelectorAsync(".products.viewdesc");
            await page.WaitForSelectorAsync(".oneperrow.f-row.product");

            var allProductDivs = await page.QuerySelectorAllAsync(".oneperrow.f-row.product");

            List<Product> products = [];

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

            await SerializeToJsonAsync(products);
        }
        catch (Exception e) {
            Console.WriteLine(e);
        }
        finally {
            await _browser.CloseAsync();
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
        var photoUrl = await photoElement.EvaluateFunctionAsync<string>("e => e.href");

        var imgPath = await SaveImgAsync(photoUrl);
        product.ImgPath = imgPath;
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
            Console.WriteLine(e);
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
            Console.WriteLine(e);
        }
    }
}