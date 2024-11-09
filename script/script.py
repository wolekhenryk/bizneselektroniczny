import json
import requests

# API credentials and URL
api_url = 'http://localhost:8080/api/categories'
api_key = 'JRUL76DYZHM8KLUS7SZ244PF179G9LI8'  # Replace with your actual API key
    
def load_categories():
    # Load the JSON data
    with open("C:\\Users\\henry\\OneDrive\\Pulpit\\github_d\\bizneselektroniczny\\ScrapingResults\\Serialization\\categories.json", 'r', encoding='utf-8') as file:
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
