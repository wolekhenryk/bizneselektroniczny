using System.Diagnostics;
using BiznesElektroniczny_scraper.API.Models;
using Newtonsoft.Json;

namespace BiznesElektroniczny_scraper.API.Services;

public class ProductsRetrieverService(IConfiguration configuration) {
    public async Task<List<Product>> GetAllProducts() {
        var jsonFilePath = Path.Combine(Directory.GetCurrentDirectory(), "..", "..", configuration["Paths:ProductsJsonPath"]!);

        // Read JSON file
        var json = await File.ReadAllTextAsync(jsonFilePath);
        return JsonConvert.DeserializeObject<List<Product>>(json) ?? [];
    }

    public async Task<Stream> GetImage(string title)
    {
        var products = await GetAllProducts();
        var foundProduct = products.FirstOrDefault(p => p.Title == title);

        if (foundProduct == null)
            return new MemoryStream();

        var imgPath = foundProduct.ImgPath;
        return new FileStream(imgPath, FileMode.Open);
    }

    public async Task WriteCategoriesAsync()
    {
        var jsonPath = configuration["Paths:ProductsJsonPath"]!;
        var jsonCategoryPath = configuration["Paths:CategoriesJsonPath"]!;

        var products = await GetAllProducts();

        SortedSet<SimpleCategory> categories = [];

        foreach (var product in products) {
            var categoryName = product.CategoryName;
            var subcategoryName = product.SubcategoryName;

            if (categories.Any(c => c.Name == categoryName))
            {
                var category = categories.First(c => c.Name == categoryName);
                category.Subcategories.Add(subcategoryName);
            }
            else
            {
                var category = new SimpleCategory(categoryName);
                category.Subcategories.Add(subcategoryName);
                categories.Add(category);
            }
        }

        var json = JsonConvert.SerializeObject(categories, Formatting.Indented);
        await File.WriteAllTextAsync(jsonCategoryPath, json);
    }

    public async Task<ExtendedCategory> CreateTree() {
        var products = await GetAllProducts();

        var rootCategory = new ExtendedCategory("main");

        foreach (var product in products) {
            var categoryPath = product.CategoryName.Split('/');
            rootCategory.AddProductToCategory(categoryPath, product);
        }

        return rootCategory;
    }
}