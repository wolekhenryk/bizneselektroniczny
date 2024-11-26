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

    public Dictionary<string, string> GetDeepestCategories() {
        Dictionary<string, string> result = [];
        TraverseCategories(this, string.Empty, result);
        return result;
    }

    private static void TraverseCategories(Category category, string path, IDictionary<string, string> result) {
        // Update the path by appending the current category name
        var newPath = string.IsNullOrEmpty(path) ? category.Name : $"{path}//{category.Name}";

        // If no subcategories, add to result
        if (category.Subcategories.Count == 0) {
            result.TryAdd(newPath.Replace("main//", ""), category.Url);
        }
        else {
            // Recursively traverse each subcategory
            foreach (var subcategory in category.Subcategories)
                TraverseCategories(subcategory, newPath, result);
        }
    }
}