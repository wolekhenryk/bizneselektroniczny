using BiznesElektroniczny_scraper.API.Models;
using Newtonsoft.Json;

namespace BiznesElektroniczny_scraper.API.Services;

public class ProductsRetrieverService(IConfiguration configuration) {
    public async Task<List<Product>> GetAllProducts() {
        var jsonFilePath = configuration["Paths:ProductsJsonPath"]!;

        // Read JSON file
        var json = await File.ReadAllTextAsync(jsonFilePath);
        return JsonConvert.DeserializeObject<List<Product>>(json) ?? [];
    }
}