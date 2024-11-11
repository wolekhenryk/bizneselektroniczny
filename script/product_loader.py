import json

def load_products():
    file_path = r"C:\Users\Adam\Studia\5 semestr\bizneselektroniczny\ScrapingResults\Serialization\products.json"

    with open(file_path, 'r', encoding='utf-8') as file:
        products = json.load(file)
        return products