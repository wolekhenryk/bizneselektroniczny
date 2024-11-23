import json
import random
from prestapyt import PrestaShopWebServiceDict
from category_utils import get_category_and_subcategory

# API credentials and URL
api_url = 'http://localhost:8080/api/'
api_key = 'JRUL76DYZHM8KLUS7SZ244PF179G9LI8'

def get_template():
    prestashop = PrestaShopWebServiceDict(api_url, api_key)
    product_template = prestashop.get("products", options={"schema": "blank"})
    
    del product_template["product"]["associations"]["combinations"]
    del product_template["product"]["position_in_category"]
    
    print(json.dumps(product_template, indent=4))
    
    return product_template
    
def add_product(prestashop, product, category_id: int, subcategory_id: int, product_template):
    product_template["product"]["name"]["language"]["value"] = product["Title"]
    #product_template["product"]["name"]["language"][1]["value"] = product["Title"]
    
    product_template["product"]["id_category_default"] = category_id
    
    product_template["product"]["id_tax_rules_group"] = 1
    product_template["product"]["price"] = round(product["Price"] / 1.23, 2)
    
    product_template["product"]["active"] = 1
    product_template["product"]["state"] = 1
    product_template["product"]["available_for_order"] = 1
    product_template["product"]["minimal_quantity"] = 1
    product_template["product"]["show_price"] = 1
    
    product_template["product"]["meta_title"]["language"]["value"] = product["Manufacturer"]
    #product_template["product"]["meta_title"]["language"][1]["value"] = product["Manufacturer"]
    
    product_template["product"]["link_rewrite"]["language"]["value"] = product["Manufacturer"].replace(" ", "-").lower()
    #product_template["product"]["link_rewrite"]["language"][1]["value"] = product["Manufacturer"].replace(" ", "-").lower()
    
    categories_list = [{'id': 2}, {'id': category_id}, {'id': subcategory_id}]
    
    product_template["product"]["associations"]["categories"] = {"category": categories_list}
    
    product_template["product"]["weight"] = round(random.uniform(0.1, 0.4), 2)
    product_template["product"]["description_short"]["language"]["value"] = product["Title"]
    #product_template["product"]["description_short"]["language"][1]["value"] = product["Title"]
    
    product_template["product"]["description"]["language"]["value"] = product["Description"]
    #product_template["product"]["description"]["language"][1]["value"] = product["Description"]
    
    #print(json.dumps(product_template, indent=4))
    
    product_id = prestashop.add("products", product_template)["prestashop"]["product"]["id"]
    print(f"Product {product_id} added.")

def load_products(categories_dictionary: dict):
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
            category_id, subcategory_id = get_category_and_subcategory(categories_dictionary, product["CategoryName"], product["SubcategoryName"])
            print(f"Category ID: {category_id}, Subcategory ID: {subcategory_id}, category: {product['CategoryName']}, subcategory: {product['SubcategoryName']}")
            
            add_product(prestashop, product, category_id, subcategory_id, get_template())
            
            break
            