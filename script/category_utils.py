import json
import requests
from prestapyt import PrestaShopWebServiceDict

# API credentials and URL
api_url = 'http://localhost:8080/api/'
api_key = 'JRUL76DYZHM8KLUS7SZ244PF179G9LI8'

def delete_categories():
    # Initialize PrestaShop WebService
    prestashop = PrestaShopWebServiceDict(api_url, api_key)
    
    # Fetch the list of categories
    categories = prestashop.get("categories")["categories"]["category"]
    
    for category in categories:
        category_id = category["attrs"]["id"]
        
        # Skip root and home categories (IDs are typically 1 and 2)
        if category_id in ("1", "2"):
            print(f"Skipping category with ID {category_id} (Root or Home)")
            continue
        
        # Delete the category
        try:
            prestashop.delete("categories", category_id)
            print(f"Deleted category with ID {category_id}")
        except Exception as e:
            print(f"Failed to delete category with ID {category_id}: {e}")
    
def load_categories():
    prestashop = PrestaShopWebServiceDict(api_url, api_key)
    categories = prestashop.get("categories")["categories"]["category"]
    
    # check if the categories are already loaded
    if len(categories) > 2:
        print("Categories already loaded.")
        return
    
    # Load the JSON data
    with open("..\\ScrapingResults\\Serialization\\categories.json", 'r', encoding='utf-8') as file:
        data = json.load(file)
        categories_dict = {item["Name"]: item["Subcategories"] for item in data}
        
        print(json.dumps(categories_dict, indent=4))

    # Function to add a category
    def add_category(name, parent_id=2, description="Default description"):
        # Prepare XML data for the category
        category_xml = f"""
        <prestashop>
        <category>
            <id_parent>{parent_id}</id_parent>
            <active>1</active>
            <name>
            <language id="1">{name}</language>
            </name>
            <link_rewrite>
            <language id="1">{name.lower().replace(" ", "-")}</language>
            </link_rewrite>
            <description>
            <language id="1">{description}</language>
            </description>
        </category>
        </prestashop>
        """
        
        # Set headers
        headers = {'Content-Type': 'application/xml', 'Accept': 'application/xml'}
        
        # Send POST request to create the category
        response = requests.post(f'{api_url}/categories', headers=headers, data=category_xml, auth=(api_key, ''))
        
        if response.status_code == 201:
            # Successfully created, parse the new category ID from the response
            print(f"Category '{name}' created successfully.")
            category_id = response.text.split('<id>')[1].split('</id>')[0]  # Extract ID from the XML response
            return category_id
        else:
            print(f"Failed to create category '{name}'. Status code: {response.status_code}")
            print("Error response:", response.text)
            return None

    # Step 3: Create Main Categories and Subcategories
    for main_category, subcategories in categories_dict.items():
        # Create the main category and get its ID
        main_category_id = add_category(main_category, parent_id=2, description=f"Description for {main_category}")
        
        if main_category_id:
            # Create each subcategory under the main category
            for subcategory in subcategories:
                add_category(subcategory, parent_id=main_category_id, description=f"Description for {subcategory}")

def fetch_categories() -> dict:
    prestashop = PrestaShopWebServiceDict(api_url, api_key)
    categories = prestashop.get("categories")["categories"]["category"]
    
    categories_dict = {}
    
    for category in categories:
        category_id = category["attrs"]["id"]
        
        category_details = prestashop.get(f"categories/{category_id}")["category"]
        category_name = category_details["name"]["language"]["value"]
        parent_id = category_details["id_parent"]
        
        categories_dict[category_id] = {
            "category_name": category_name,
            "parent_id": parent_id,
        }
    
    return categories_dict


def transform_categories(categories: dict) -> dict:
    main_categories = {}

    # Iterate over categories to find main and subcategories
    for category_id, details in categories.items():
        parent_id = details["parent_id"]
        category_name = details["category_name"]
        
        # Skip "Root" and "Home"
        if parent_id == "0" or category_name == "Home":
            continue
        
        # If the parent is "Home" (main category), initialize it in the result
        if parent_id == "2":
            main_categories[category_id] = {"name": category_name, "subcategories": {}}
        # Otherwise, add it as a subcategory under its parent
        elif parent_id in categories:
            parent_name_id = [
                k for k, v in main_categories.items() if v["name"] == categories[parent_id]["category_name"]
            ]
            if parent_name_id:
                main_categories[parent_name_id[0]]["subcategories"][category_id] = category_name

                
    return main_categories

def get_category_and_subcategory(dict: dict, category_name: str, subcategory_name: str) -> tuple[int, int]:
    for main_category_id, main_category in dict.items():
        if main_category["name"] == category_name:
            for subcategory_id, subcategory in main_category["subcategories"].items():
                if subcategory == subcategory_name:
                    return main_category_id, subcategory_id
    return None, None