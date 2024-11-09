using BiznesElektroniczny_scraper.API.Services;
using BiznesElektroniczny_scraper.API.Services.Scraping;
using Hangfire;
using Microsoft.AspNetCore.Mvc;

namespace BiznesElektroniczny_scraper.API.Controllers;

[Route("api/[controller]")]
[ApiController]
public class ProductController(
    ProductsRetrieverService productsRetrieverService,
    ProductScrapingService productScrapingService) : ControllerBase {
    [HttpGet]
    public async Task<IActionResult> GetAllProducts() =>
        Ok(await productsRetrieverService.GetAllProducts());

    [HttpPost("scrape")]
    public IActionResult ScrapeProducts([FromBody] string url) =>
        Ok(BackgroundJob.Enqueue(() => productScrapingService.ScrapeAsync(url)));

    [HttpGet("category-tree")]
    public async Task<IActionResult> GetCategoryTree() =>
        Ok(await productsRetrieverService.CreateTree());

    [HttpGet("img/{title}")]
    public async Task<IActionResult> GetImage(string title) {
        var stream = await productsRetrieverService.GetImage(title);
        return File(stream, "image/jpeg");
    }

    [HttpGet("categories")]
    public async Task<IActionResult> WriteCategories()
    {
        await productsRetrieverService.WriteCategoriesAsync();
        return Ok();
    }
}