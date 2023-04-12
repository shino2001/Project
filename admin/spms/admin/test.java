# Query: 
# ContextLines: 1

import org.openqa.selenium.*;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;


public class App {
    public static void main(String[] args) throws Exception {
        System.setProperty("webdriver.chrome.driver", "D:/testingnew/chromedriver.exe");
        ChromeOptions co = new ChromeOptions();
        co.addArguments("--remote-allow-origins=*");
        WebDriver driver = new ChromeDriver(co);

        // driver.get("http://localhost/Complete/login.php");
        // driver.findElement(By.name("email")).sendKeys("ajaymatthew@mca.ajce.in");
        // driver.findElement(By.name("password")).sendKeys("44444444");
        // driver.findElement(By.name("log")).click();
        // driver.get("http://localhost/Complete/ind.php");
        // driver.findElement(By.name("recp")).click();
        // driver.get("http://localhost/Complete/rec.php");
        // driver.findElement(By.name("veg")).click();
        // driver.get("http://localhost/Complete/rec/v.php");
        // driver.findElement(By.name("recd")).click();
        // driver.get("http://localhost/Complete/rec/rec_det.php?id=68");
        // driver.findElement(By.name("fav")).click();
        // System.out.println("Test Passed");

        // Admin
        // driver.get("http://localhost/Complete/login.php");
        // driver.findElement(By.name("email")).sendKeys("admin@gmail.com");
        // driver.findElement(By.name("password")).sendKeys("11111111");
        // driver.findElement(By.name("log")).click();
        // driver.get("http://localhost/Complete/admin.php");
        // driver.findElement(By.name("uinfo")).click();
        // driver.get("http://localhost/Complete/display.php");
        // driver.findElement(By.name("deac")).click();
        // System.out.println("Test Passed");


        // driver.get("http://localhost/Complete/login.php");
        // driver.findElement(By.name("email")).sendKeys("ajaymatthew@mca.ajce.in");
        // driver.findElement(By.name("password")).sendKeys("44444444");
        // driver.findElement(By.name("log")).click();
        // driver.get("http://localhost/Complete/ind.php");
        // driver.findElement(By.name("recp")).click();
        // driver.get("http://localhost/Complete/rec.php");
        // driver.findElement(By.name("veg")).click();
        // driver.get("http://localhost/Complete/rec/v.php");
        // driver.findElement(By.name("recd")).click();
        // driver.get("http://localhost/Complete/rec/rec_det.php?id=68");
        // driver.findElement(By.name("down")).click();
        // System.out.println("Test Passed");

        driver.get("http://localhost/Complete/login.php");
        driver.findElement(By.name("email")).sendKeys("ajaymatthew@mca.ajce.in");
        driver.findElement(By.name("password")).sendKeys("44444444");
        driver.findElement(By.name("log")).click();
        driver.get("http://localhost/Complete/ind.php");
        driver.findElement(By.name("recp")).click();
        driver.get("http://localhost/Complete/rec.php");
        driver.findElement(By.name("veg")).click();
        driver.get("http://localhost/Complete/rec/v.php");
        driver.findElement(By.name("recd")).click();
        driver.get("http://localhost/Complete/rec/rec_det.php?id=68");
        driver.findElement(By.name("down")).click();
        System.out.println("Test Passed");
        // // 2nd code
        // driver.get("http://127.0.0.1:8000/admin/");
        // driver.findElement(By.name("username")).sendKeys("HOTWHEELS");
        // driver.findElement(By.name("password")).sendKeys("");
        // driver.findElement(By.xpath("//button[contains(text(),'Log in')]")).click();
        // driver.get("http://127.0.0.1:8000/admin/cars/company/add/");
        // driver.findElement(By.id("id_name")).sendKeys("Test Data");
        // driver.findElement(By.xpath("//input[@type='submit' and @value='Save']")).click();



        // // 1st code
        // driver.get("http://127.0.0.1:8000/cars/signin/");
        // driver.findElement(By.id("logl")).sendKeys("sher1");
        // driver.findElement(By.id("logp")).sendKeys("");
        // driver.findElement(By.id("submit")).click();
        // driver.get("http://127.0.0.1:8000/cars/product_listing/");
        // driver.findElement(By.xpath("//a/button[contains(text(), 'More')]")).click();
        // driver.findElement(By.linkText("Book For Test Drive")).click();
        // driver.findElement(By.name("Address")).sendKeys("PuthettuputhuParambilsabu");
        // driver.findElement(By.name("LicenceIDNumber")).sendKeys("AA1234567891");
        // driver.findElement(By.name("Pincode")).sendKeys("656813");
        // driver.findElement(By.name("ContactNumber")).sendKeys("+91 75608 93894");
        // driver.findElement(By.name("State")).sendKeys("kerala");
        // driver.findElement(By.name("City")).sendKeys("kollam");
        // driver.findElement(By.id("birthday")).sendKeys("2023-05-06 14:12:00");
        // driver.findElement(By.id("sub")).click();
 
    }
}