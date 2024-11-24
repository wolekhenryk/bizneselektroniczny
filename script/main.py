import category_utils
import product_utils
import json

def main():
    # Step 1: Delete all existing categories (except the root category and the home category)
    #category_utils.delete_categories()
    
    # Step 2: Load the categories
    #category_utils.load_categories()
    
    # Step 3: Fetch the categories
    categories = category_utils.fetch_categories()
    
    # Step 4: Transform the categories into a dictionary of dictionaries
    transformed_categories = category_utils.transform_categories(categories)
    #print(json.dumps(transformed_categories, indent=4))
    
    # Step 5: Load the products
    product_utils.load_products(transformed_categories)
    
if __name__ == "__main__":
    main()
    