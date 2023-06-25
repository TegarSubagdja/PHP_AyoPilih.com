import time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options

options = webdriver.ChromeOptions()
options.add_experimental_option("detach", True)
driver = webdriver.Chrome(options=options)

driver.get("https://presensi.itenas.ac.id")
driver.find_element(By.ID, "username").send_keys("152021169")
driver.find_element(By.ID, "password").send_keys("cobadlugasih")
driver.find_element(By.XPATH, "/html/body/div[2]/div[3]/div/div/div/div[2]/div/form/button").click()
time.sleep(5)
driver.close()