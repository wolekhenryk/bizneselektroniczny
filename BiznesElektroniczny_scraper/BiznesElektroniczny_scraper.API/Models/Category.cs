namespace BiznesElektroniczny_scraper.API.Models;

public class Category(string categoryName = "No category") : IComparable<Category> {
    public string Name { get; set; } = categoryName;
    public string Url { get; set; } = string.Empty;
    public ISet<Category> Subcategories { get; set; } = new SortedSet<Category>();

    public int CompareTo(Category? other) {
        if (ReferenceEquals(this, other)) return 0; // Both objects are the same
        return ReferenceEquals(null, other)
            ? 1
            : // Other object is null
            string.Compare(Name, other.Name, StringComparison.OrdinalIgnoreCase);
    }
}