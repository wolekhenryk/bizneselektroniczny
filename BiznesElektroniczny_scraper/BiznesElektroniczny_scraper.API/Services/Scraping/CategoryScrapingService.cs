using BiznesElektroniczny_scraper.API.Models;
using Newtonsoft.Json;
using PuppeteerSharp;

namespace BiznesElektroniczny_scraper.API.Services.Scraping;

public class CategoryScrapingService(IConfiguration configuration, ILogger<CategoryScrapingService> logger) {
    private readonly string _categoriesJsonPath = configuration["Paths:CategoriesJsonPath"]!;
    private readonly string _browserPath = configuration["Paths:BrowserPath"]!;

    private IBrowser _browser = null!;

    public async Task ScrapeAsync() {
        await PrepareAsync();

        try {
            await using var page = await _browser.NewPageAsync();

            await page.GoToAsync("https://www.atomcomics.pl/");

            await page.WaitForSelectorAsync("ul.menu-list.large.standard");
            await page.WaitForSelectorAsync("li.parent.link-main");

            var rootCategory = new Category("main");

            var mainCategoriesElements = await page.QuerySelectorAllAsync("li.parent.link-main");

            await ProcessRecursiveCategoriesAsync(rootCategory, mainCategoriesElements);
            await SerializeToJsonAsync(rootCategory);
        }
        catch (Exception e) {
            logger.LogError(e, "Error while scraping categories");
        }
        finally {
            await _browser.CloseAsync();
        }
    }

    private async Task SerializeToJsonAsync(Category rootCategory) {
        try {
            var json = JsonConvert.SerializeObject(rootCategory, Formatting.Indented);
            await File.WriteAllTextAsync(_categoriesJsonPath, json);
        }
        catch (Exception e) {
            logger.LogError(e, "Error while serializing categories to file");
        }
    }

    private static async Task ProcessRecursiveCategoriesAsync(Category parentCategory,
        IEnumerable<IElementHandle> categoryElements, int level = 0) {
        foreach (var categoryElement in categoryElements) {
            var categoryNameElement = await categoryElement.QuerySelectorAsync("span.h3 a span");
            if (categoryNameElement == null)
                continue;

            var categoryName = await categoryNameElement.EvaluateFunctionAsync<string>("e => e.innerText");

            var linkElement = await categoryElement.QuerySelectorAsync("span.h3 a");
            var categoryUrl = await linkElement.EvaluateFunctionAsync<string>("e => e.href");

            var category = new Category(categoryName);
            parentCategory.Subcategories.Add(category);

            category.Url = categoryUrl;

            switch (level) {
                case 0: {
                    // Process level 1 subcategories
                    var hasSubcategories = await categoryElement.QuerySelectorAsync("div.submenu.level1") is not null;

                    if (!hasSubcategories)
                        continue;

                    var subcategoriesElementsLvl1 =
                        await categoryElement.QuerySelectorAllAsync(
                            "div.submenu.level1 > ul.level1 > div.sub-links > li");

                    // Recursive call for level 1 subcategories
                    await ProcessRecursiveCategoriesAsync(category, subcategoriesElementsLvl1, level + 1);
                    break;
                }
                case 1: {
                    // Process level 2 subcategories
                    var hasSubcategories = await categoryElement.QuerySelectorAsync("ul.level2") is not null;

                    if (!hasSubcategories)
                        continue;

                    var subcategoriesElementsLvl2 =
                        await categoryElement.QuerySelectorAllAsync("div.sub-links li");

                    // Recursive call for level 2 subcategories
                    await ProcessRecursiveCategoriesAsync(category, subcategoriesElementsLvl2, level + 1);
                    break;
                }
            }
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