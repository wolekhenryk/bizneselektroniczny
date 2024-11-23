import json
from prestapyt import PrestaShopWebServiceDict

# API credentials and URL
api_url = 'http://localhost:8080/api/'
api_key = 'JRUL76DYZHM8KLUS7SZ244PF179G9LI8'

def load_products(subcategoryPaths: dict):
    # Check if the products are already loaded
    prestashop = PrestaShopWebServiceDict(api_url, api_key)
    products = prestashop.get("products")["products"]
    if products != '' and len(products["product"]) > 0:
        print("Products already loaded.")
        return
    
    with open("..\\ScrapingResults\\Serialization\\products.json", 'r', encoding='utf-8') as file:
        data = json.load(file)
        for product in data:
            # Użyj tego słownika, żeby wsadzić produkt do odpowiedniej kategorii
            product_subcategory_id = subcategoryPaths[f'{product["CategoryName"]}/{product["SubcategoryName"]}']
            print (product_subcategory_id)