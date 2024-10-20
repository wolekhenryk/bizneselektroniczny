namespace BiznesElektroniczny_scraper.API.Models;

public class Category {
    public string Name { get; set; } = "No category";
    public string Description { get; set; } = "No description";
    public SortedSet<Category> Subcategories { get; set; } = [];
}