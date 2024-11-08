namespace BiznesElektroniczny_scraper.API.Models;

public class Product : IComparable<Product> {
    public required string Title { get; set; }
    public required string Manufacturer { get; set; }
    public string CategoryName { get; set; } = "No category";
    public required decimal Price { get; set; }
    public string Description { get; set; } = "No description";
    public string Isbn { get; set; } = "No ISBN";
    public string ImgPath { get; set; } = "No image";
    public int CompareTo(Product? other) {
        if (ReferenceEquals(this, other)) return 0; // Both objects are the same
        return ReferenceEquals(null, other)
            ? 1
            : // Other object is null
            string.Compare(Title, other.Title, StringComparison.OrdinalIgnoreCase);
    }
}