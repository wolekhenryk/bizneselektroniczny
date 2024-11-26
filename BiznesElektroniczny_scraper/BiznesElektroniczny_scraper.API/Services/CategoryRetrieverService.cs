using BiznesElektroniczny_scraper.API.Models;
using Newtonsoft.Json;

namespace BiznesElektroniczny_scraper.API.Services;

public class CategoryRetrieverService(IConfiguration configuration) {
    public async Task<Category> GetAllCategories() {
        var jsonFilePath = configuration["Paths:CategoriesJsonPath"]!;

        // Read JSON file
        var json = await File.ReadAllTextAsync(jsonFilePath);
        return JsonConvert.DeserializeObject<Category>(json) ?? new Category();
    }

    public async Task<Dictionary<string, string>> GetFlatCategories() {
        var jsonFilePath = Path.Combine(Directory.GetCurrentDirectory(), "..", "..",
            configuration["Paths:CategoriesJsonPath"]!);

        // Read JSON file
        var json = await File.ReadAllTextAsync(jsonFilePath);
        var rootCategory = JsonConvert.DeserializeObject<Category>(json) ?? new Category();

        return rootCategory.GetDeepestCategories();
    }
}