from prestapyt import PrestaShopWebService

API_URL = "http://localhost:8080/api"
API_KEY = "your_prestashop_api_key"


if __name__ == '__main__':
    prestashop = PrestaShopWebService(
        'http://localhost:8080/api',
        'JRUL76DYZHM8KLUS7SZ244PF179G9LI8'
    )
    
    products = prestashop.get("products")["products"]
    
    product_template = prestashop.get('products', options={
        "schema": "blank"
    })

