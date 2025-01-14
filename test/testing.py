from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.chrome.options import Options
import random
import time
import os

categories = [
    "https://localhost:19316/13-komiksy-serialowe",
    "https://localhost:19316/11-komiksy-dla-doroslych"
]

print("Testing started")

download_dir = os.path.abspath('./DownloadsFolder')
if not os.path.exists(download_dir):
    os.makedirs(download_dir)

prefs = {
    "download.default_directory": download_dir,
    "download.prompt_for_download": False
}

options = Options()
options.add_argument('--ignore-certificate-errors')
options.page_load_strategy = 'eager'
options.add_experimental_option("prefs", prefs)

driver = webdriver.Chrome(options=options)
driver.set_window_position(0, 0)
driver.maximize_window()

wait = WebDriverWait(driver, 20)

def get_products_from_category(url):
    driver.get(url)

    wait.until(EC.presence_of_all_elements_located((By.CSS_SELECTOR, ".btn.btn-primary.add-to-cart")))
    
    buttons = driver.find_elements(By.CSS_SELECTOR, ".btn.btn-primary.add-to-cart")[:5]
    print(f"Found {len(buttons)} products in category {url}")
    
    for i in range(len(buttons)):
        try:
            buttons = driver.find_elements(By.CSS_SELECTOR, ".btn.btn-primary.add-to-cart")
            
            buttons[i].click()
            print(f"Clicked button {i + 1} (first click)")

            driver.back()
            wait.until(EC.presence_of_all_elements_located((By.CSS_SELECTOR, ".btn.btn-primary.add-to-cart")))
            
            if random.random() <= 0.4:  # 40% chance
                buttons = driver.find_elements(By.CSS_SELECTOR, ".btn.btn-primary.add-to-cart")
                buttons[i].click()
                print(f"Clicked button {i + 1} (second click)")

                driver.back()
                wait.until(EC.presence_of_all_elements_located((By.CSS_SELECTOR, ".btn.btn-primary.add-to-cart")))
                #time.sleep(1)
            
            #time.sleep(1)

        except Exception as e:
            print(f"Error interacting with button {i + 1}: {e}")

        
def enter_cart():
    try:
        driver.get("https://localhost:19316/koszyk")
        print("Navigated to the cart page")
        #time.sleep(5)

        wait.until(EC.presence_of_all_elements_located((By.CSS_SELECTOR, ".js-cart-line-product-quantity.form-control")))
        print("All elements are present")

        inputs = driver.find_elements(By.CSS_SELECTOR, ".js-cart-line-product-quantity.form-control")
        print(f"Found {len(inputs)} input elements")
        
        print("Finished setting values")
        remove_buttons = driver.find_elements(By.CSS_SELECTOR, ".material-icons.float-xs-left")[:3]
        
        for i in range(len(remove_buttons)):
            remove_buttons[i].click()
            print(f"Clicked remove button {i + 1}")
    except Exception as e:
        print(f"An error occurred: {e}")
    
def place_order():
    print("Placing order")
    driver.get("https://localhost:19316/zamówienie")
    wait = WebDriverWait(driver, 10)
    radio_buttons = wait.until(
        EC.presence_of_all_elements_located((By.NAME, "id_gender"))
    )
    
    #time.sleep(10)
    
    if radio_buttons:
        radio_buttons[0].click()
        print("Selected the first gender radio button")
    else:
        print("No radio buttons found with ID 'id_gender'")
        
    wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "#field-firstname"))).send_keys("Example name")
    print("First name filled")

    wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "#field-lastname"))).send_keys("Example surname")
    print("Last name filled")

    email = f"{''.join(random.choices('abcdefghijklmnopqrstuvwxyz', k=10))}@example.com"

    wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "#field-email"))).send_keys(email)
    print(f"Email filled: {email}")

    wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "#field-password"))).send_keys("123456789")
    print("Password filled: 123456789")

    wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "#field-birthday"))).send_keys("1970-05-31")
    print("Birthday filled")

    privacy_checkbox = wait.until(EC.presence_of_element_located((By.NAME, "customer_privacy")))
    privacy_checkbox.click()
    print("Customer privacy checkbox clicked")

    psgdpr_checkbox = wait.until(EC.presence_of_element_located((By.NAME, "psgdpr")))
    psgdpr_checkbox.click()
    print("PS GDPR checkbox clicked")
    
    continue_button = wait.until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, ".continue.btn.btn-primary.float-xs-right"))
    )
    continue_button.click()
    print("Continue button clicked")
    
    wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "#field-address1")))
    print("Address form loaded")

    wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "#field-address1"))).send_keys("Example address")
    print("Address filled")

    wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "#field-postcode"))).send_keys("81-249")
    print("Postcode filled")

    wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "#field-city"))).send_keys("Berlin")
    print("City filled")

    footer = wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "footer.form-footer.clearfix")))
    print("Footer located")
    
    second_continue_button = footer.find_element(By.CSS_SELECTOR, ".continue.btn.btn-primary.float-xs-right")
    second_continue_button.click()

    print("Second continue button clicked")
    
    delivery_options = wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "div.delivery-options-list")))
    third_continue_button = delivery_options.find_element(By.CSS_SELECTOR, ".continue.btn.btn-primary.float-xs-right")
    third_continue_button.click()
    
    print("Third continue button clicked")
    
    checkbox_last = wait.until(EC.presence_of_element_located((By.ID, "conditions_to_approve[terms-and-conditions]")))
    checkbox_last.click()
    
    container = wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "div.ps-shown-by-js")))
    button_confirm = container.find_element(By.CSS_SELECTOR, ".btn.btn-primary.center-block")
    button_confirm.click()
    
def get_status_and_invoice():
    try:
        driver.get("https://localhost:19316/historia-zamowien")
        print("Navigated to order history page")

        wait = WebDriverWait(driver, 10)
        table = wait.until(EC.presence_of_element_located((By.CSS_SELECTOR, "table.table.table-striped.table-bordered.table-labeled.hidden-sm-down")))
        print("Table located")

        first_row = table.find_element(By.CSS_SELECTOR, "tbody > tr:first-child")
        print("First row located")

        status_td = first_row.find_element(By.CSS_SELECTOR, "td span.label.label-pill.bright")
        status_text = status_td.text
        print(f"Order Status: {status_text}")

        invoice_link_td = first_row.find_element(By.CSS_SELECTOR, "td a[href]")
        invoice_link = invoice_link_td.get_attribute("href")
        print(f"Invoice link: {invoice_link}")

        driver.get(invoice_link)
        print("Navigated to the invoice link to trigger download")
    except Exception as e:
        print(f"An error occurred: {e}")


def main():
    for category in categories:
        get_products_from_category(category)
        
    enter_cart()
    place_order()
    get_status_and_invoice()
    
    print("Testing completed")

        
if __name__ == "__main__":
    main()
