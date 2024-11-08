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
        Ok((await productsRetrieverService.GetAllProducts()).Count);

    [HttpPost("scrape")]
    public IActionResult ScrapeProducts([FromBody] string url) =>
        Ok(BackgroundJob.Enqueue(() => productScrapingService.ScrapeAsync(url)));

    [HttpGet("category-tree")]
    public async Task<IActionResult> GetCategoryTree() =>
        Ok(await productsRetrieverService.CreateTree());
}