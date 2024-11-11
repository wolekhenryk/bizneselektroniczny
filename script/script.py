import json
import requests
import xml.etree.ElementTree as ET
import product_loader as pl

# API credentials and URL
api_url = 'http://localhost:8080/api/categories'
api_key = 'IRYCFA6UTH31HT6114NKS4UV5BVLXIVV'  # Replace with your actual API key


def delete_all_categories():
    # Send GET request to fetch all categories
    response = requests.get(api_url, auth=(api_key, ''))

    if response.status_code == 200:
        # Parse XML response to extract category IDs
        try:
            root = ET.fromstring(response.text)
            # Get category IDs from the 'id' attribute in each <category> element
            category_ids = [int(category.get('id')) for category in root.findall(".//category") if category.get('id')]

            # Proceed to delete each category
            for category_id in category_ids:
                if category_id != 1 and category_id != 2:
                    response = requests.delete(f"{api_url}/{category_id}", auth=(api_key, ''))
                    if response.status_code == 200:
                        print(f"Category ID {category_id} deleted successfully.")
                    else:
                        print(f"Failed to delete category ID {category_id}. Status code: {response.status_code}")
                        print("Error response:", response.text)

        except ET.ParseError as e:
            print("Failed to parse XML response:", e)
            print("Response content:", response.text)

    else:
        print(f"Failed to fetch categories. Status code: {response.status_code}")
        print("Error response:", response.text)


def delete_all_products():
    # Send GET request to fetch all products
    response = requests.get(api_url, auth=(api_key, ''))

    if response.status_code == 200:
        # Parse XML response to extract product IDs
        try:
            root = ET.fromstring(response.text)
            # Get product IDs from the 'id' attribute in each <product> element
            product_ids = [int(product.get('id')) for product in root.findall(".//product") if product.get('id')]

            # Proceed to delete each product
            for product_id in product_ids:
                response = requests.delete(f"{api_url}/{product_id}", auth=(api_key, ''))
                if response.status_code == 200:
                    print(f"Product ID {product_id} deleted successfully.")
                else:
                    print(f"Failed to delete product ID {product_id}. Status code: {response.status_code}")
                    print("Error response:", response.text)

        except ET.ParseError as e:
            print("Failed to parse XML response:", e)
            print("Response content:", response.text)

    else:
        print(f"Failed to fetch products. Status code: {response.status_code}")
        print("Error response:", response.text)


def load_categories():
    # Load the JSON data
    with open(r"C:\Users\Adam\Studia\5 semestr\bizneselektroniczny\ScrapingResults\Serialization\categories.json", 'r', encoding='utf-8') as file:
        data = json.load(file)
        categories_dict = {item["Name"]: item["Subcategories"] for item in data}

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
        response = requests.post(api_url, headers=headers, data=category_xml, auth=(api_key, ''))
        
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


def load_products():
    # Load the JSON data
    with open(r"C:\Users\Adam\Studia\5 semestr\bizneselektroniczny\ScrapingResults\Serialization\products.json", 'r', encoding='utf-8') as file:
        products = json.load(file)

    # Send GET request to fetch all categories
    response = requests.get(api_url, auth=(api_key, ''))
    category_ids = []
    category_name = []
    if response.status_code == 200:
        # Parse XML response to extract category IDs
        try:
            root = ET.fromstring(response.text)
             # Get category IDs from the 'id' attribute in each <category> element
            category_ids = [int(category.get('id')) for category in root.findall(".//category") if category.get('id')]
            category_name = [category.find('name').text for category in root.findall(".//category") if category.find('name').text]
        except:
            print("Failed to parse XML response")
            print("Response content:", response.text)
            return None
    # Function to add a product
    def add_product(name, price, category_id, description="Default description"):
        # Prepare XML data for the product
        product_xml = f"""
        <prestashop>
        <product>
            <id_category_default>{category_id}</id_category_default>
            <new>1</new>
            <price>{price}</price>
            <active>1</active>
            <name>
            <language id="1">{name}</language>
            </name>
            <description>
            <language id="1">{description}</language>
            </description>
        </product>
        </prestashop>
        """

        # Set headers
        headers = {'Content-Type': 'application/xml', 'Accept': 'application/xml'}

        # Send POST request to create the product
        response = requests.post(api_url, headers=headers, data=product_xml, auth=(api_key, ''))

        if response.status_code == 201:
            # Successfully created, parse the new product ID from the response
            print(f"Product '{name}' created successfully.")
            product_id = response.text.split('<id>')[1].split('</id>')[0]  # Extract ID from the XML response
            return product_id
        else:
            print(f"Failed to create product '{name}'. Status code: {response.status_code}")
            print("Error response:", response.text)
            return None

    # Step 4: Create Products
    for product in products:
        # Create the product and get its ID
        product_id = add_product(product["Title"], product["Price"], product["CategoryName"], description=product["Description"])


#delete_all_categories()
#load_categories()
delete_all_products()
load_products()

