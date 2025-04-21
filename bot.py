from selenium import webdriver
from selenium.webdriver.chrome.options import Options
import time

print("[*] Headless admin bot starting up...")

while True:
    try:
        chrome_options = Options()
        chrome_options.add_argument("--headless")
        chrome_options.add_argument("--no-sandbox")
        chrome_options.add_argument("--disable-dev-shm-usage")

        driver = webdriver.Chrome(options=chrome_options)

        # Step 1: Hit a PHP page that sets the admin cookie and redirects
        driver.get("http://localhost/admin-bot.php")
        time.sleep(2)

        # Step 2: Confirm the cookie is now set
        print("[+] Cookies in browser:", driver.get_cookies())

        # Step 3: Verify JS sees it
        cookie_val = driver.execute_script("return document.cookie;")
        print("[+] document.cookie =", cookie_val)

        # Step 4: Screenshot for debugging (optional)
        driver.save_screenshot("/tmp/bot.png")
        print("[+] Screenshot saved")

        driver.quit()

    except Exception as e:
        print("[-] Admin bot crashed:", e)

    time.sleep(10)
