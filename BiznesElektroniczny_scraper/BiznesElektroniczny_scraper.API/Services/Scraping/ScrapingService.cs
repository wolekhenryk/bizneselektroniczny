using System.Globalization;
using System.Text.RegularExpressions;
using BiznesElektroniczny_scraper.API.Models;
using Newtonsoft.Json;
using PuppeteerSharp;

namespace BiznesElektroniczny_scraper.API.Services.Scraping;

public class ScrapingService {
    private const string JsonPath =
        @"C:\Users\henry\source\repos\BiznesElektroniczny_scraper\BiznesElektroniczny_scraper.API\Serialization\products.json";
    public async Task ScrapeAsync() {
        await PrepareAsync();

        try {
            await using var browser = await Puppeteer.LaunchAsync(new LaunchOptions {
                Headless = true,
                ExecutablePath =
                    @"C:\Users\henry\source\repos\BiznesElektroniczny_scraper\BiznesElektroniczny_scraper.API\bin\Debug\net8.0\Chrome\Win64-130.0.6723.58\chrome-win64\chrome.exe"
            });

            await using var page = await browser.NewPageAsync();

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

                products.Add(new Product {
                    Title = titleName,
                    Manufacturer = manufacturerName,
                    CategoryName = categoryName,
                    Price = price
                });
            }

            await File.WriteAllTextAsync(JsonPath, JsonConvert.SerializeObject(products, Formatting.Indented));
        }
        catch (Exception e) {
            Console.WriteLine(e);
        }
    }

    private static async Task PrepareAsync() {
        try {
            var browserFetcher = Puppeteer.CreateBrowserFetcher(new BrowserFetcherOptions {
                Path = null
            });

            await browserFetcher.DownloadAsync(BrowserTag.Stable);
        }
        catch (Exception e) {
            Console.WriteLine(e);
        }
    }
}