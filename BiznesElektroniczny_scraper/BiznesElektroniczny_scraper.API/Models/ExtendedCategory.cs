namespace BiznesElektroniczny_scraper.API.Models;

public class ExtendedCategory(string categoryName = "No category") : IComparable<ExtendedCategory> {
    public string Name { get; set; } = categoryName;
    public string Url { get; set; } = string.Empty;

    /// <summary>
    /// Recursively counts the number of products in this category and all subcategories.
    /// </summary>
    public int Count => Products.Count + Subcategories.Sum(subcategory => subcategory.Count);

    public ISet<ExtendedCategory> Subcategories { get; set; } = new SortedSet<ExtendedCategory>();
    public ISet<Product> Products { get; set; } = new SortedSet<Product>();

    public int CompareTo(ExtendedCategory? other) {
        if (ReferenceEquals(this, other)) return 0; // Both objects are the same
        return ReferenceEquals(null, other)
            ? 1
            : // Other object is null
            string.Compare(Name, other.Name, StringComparison.OrdinalIgnoreCase);
    }

    // Recursive method to add a product to the correct leaf category
    public void AddProductToCategory(string[] categoryPath, Product product, int level = 0) {
        // Base case: If at the leaf node of the path, add the product
        if (level == categoryPath.Length) {
            Products.Add(product);
            return;
        }

        // Recursive case: Traverse or create the next level in the path
        var currentCategoryName = categoryPath[level];
        var nextCategory = Subcategories.FirstOrDefault(c => c.Name == currentCategoryName);

        if (nextCategory == null) {
            nextCategory = new ExtendedCategory(currentCategoryName);
            Subcategories.Add(nextCategory);
        }

        // Recursively call AddProductToCategory on the next level
        nextCategory.AddProductToCategory(categoryPath, product, level + 1);
    }
}