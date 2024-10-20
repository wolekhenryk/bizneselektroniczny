namespace BiznesElektroniczny_scraper.API.Models;

public class Product {
    public required string Title { get; set; }
    public required string Manufacturer { get; set; }
    public string CategoryName { get; set; } = "No category";
    public required decimal Price { get; set; }
}