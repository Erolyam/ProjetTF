import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.support.ui.Select;

import com.gargoylesoftware.htmlunit.BrowserVersion;
import com.gargoylesoftware.htmlunit.WebClient;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.htmlunit.HtmlUnitDriver;

import java.util.concurrent.TimeUnit;
import java.util.logging.Level;


public class AI2 {
  private WebDriver driver;
  private String baseUrl;
  private boolean acceptNextAlert = true;
  private StringBuffer verificationErrors = new StringBuffer();

  @Before
  public void setUp() throws Exception {
    driver = new HtmlUnitDriver() {
    @Override
    protected WebClient newWebClient(BrowserVersion version) {
      WebClient webClient = super.newWebClient(version);
      webClient.getOptions().setThrowExceptionOnScriptError(false);
        return webClient;
    }
  };
baseUrl = "http://172.20.128.68";
driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
java.util.logging.Logger.getLogger("com.gargoylesoftware").setLevel(Level.OFF);
System.setProperty("org.apache.commons.logging.Log", "org.apache.commons.logging.impl.NoOpLog");
}

  @Test
  public void testAI2() throws Exception {
    driver.get(baseUrl + "/~m2test5/prod/views/users/register.php");
    driver.findElement(By.name("name")).clear();
    driver.findElement(By.name("name")).sendKeys("FailInscription");
    driver.findElement(By.name("lastname")).clear();
    driver.findElement(By.name("lastname")).sendKeys("Fail@@@@@");
    driver.findElement(By.name("username")).clear();
    driver.findElement(By.name("username")).sendKeys("Pseudo");
    driver.findElement(By.name("email")).clear();
    driver.findElement(By.name("email")).sendKeys("yolo@yolo.com");
    driver.findElement(By.name("password")).clear();
    driver.findElement(By.name("password")).sendKeys("r!!!!!");
    driver.findElement(By.name("passconf")).clear();
    driver.findElement(By.name("passconf")).sendKeys("r!!!!!!");
    driver.findElement(By.name("age")).clear();
    driver.findElement(By.name("age")).sendKeys("25");
    driver.findElement(By.name("photo")).clear();
//    driver.findElement(By.name("photo")).sendKeys("D:\\Timer Start Event SupprimACCENT.png");
//    driver.findElement(By.xpath("//button[@type='submit']")).click();
//    driver.findElement(By.name("username")).clear();
//    driver.findElement(By.name("username")).sendKeys("T");
//    driver.findElement(By.linkText("Se connecter")).click();
//    driver.findElement(By.name("username")).clear();
//    driver.findElement(By.name("username")).sendKeys("FailInscription");
//    driver.findElement(By.name("password")).clear();
//    driver.findElement(By.name("password")).sendKeys("yolo");
//    driver.findElement(By.name("login")).click();
  }

  @After
  public void tearDown() throws Exception {
    driver.quit();
    String verificationErrorString = verificationErrors.toString();
    if (!"".equals(verificationErrorString)) {
      fail(verificationErrorString);
    }
  }

  private boolean isElementPresent(By by) {
    try {
      driver.findElement(by);
      return true;
    } catch (NoSuchElementException e) {
      return false;
    }
  }

  private boolean isAlertPresent() {
    try {
      driver.switchTo().alert();
      return true;
    } catch (NoAlertPresentException e) {
      return false;
    }
  }

  private String closeAlertAndGetItsText() {
    try {
      Alert alert = driver.switchTo().alert();
      String alertText = alert.getText();
      if (acceptNextAlert) {
        alert.accept();
      } else {
        alert.dismiss();
      }
      return alertText;
    } finally {
      acceptNextAlert = true;
    }
  }
}
