namespace BiznesElektroniczny_scraper.API.Models;

public class SimpleCategory(string name = "") : IComparable<SimpleCategory> {
    public string Name { get; set; } = name;
    public SortedSet<string> Subcategories { get; set; } = [];
    public int CompareTo(SimpleCategory? other)
    {
        if (ReferenceEquals(this, other)) return 0; // Both objects are the same
        return ReferenceEquals(null, other)
            ? 1
            : // Other object is null
            string.Compare(Name, other.Name, StringComparison.OrdinalIgnoreCase);
    }
}