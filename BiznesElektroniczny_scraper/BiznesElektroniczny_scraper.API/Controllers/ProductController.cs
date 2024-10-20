using BiznesElektroniczny_scraper.API.Services;
using Microsoft.AspNetCore.Mvc;

namespace BiznesElektroniczny_scraper.API.Controllers;

[Route("api/[controller]")]
[ApiController]
public class ProductController(ProductsRetrieverService productsRetrieverService) : ControllerBase {
    [HttpGet]
    public async Task<IActionResult> GetAllProducts() {
        var products = await productsRetrieverService.GetAllProducts();
        return Ok(products);
    }
}