import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
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

public class UO2VoteDesOeuvres {
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
  public void testUO2VoteDesOeuvres() throws Exception {
    driver.get(baseUrl + "/ProjetTF/Source/views/gallerie/gallerie.php");
    driver.findElement(By.linkText("Se connecter")).click();
    driver.findElement(By.name("username")).clear();
    driver.findElement(By.name("username")).sendKeys("FlirkynTest");
    driver.findElement(By.name("password")).clear();
    driver.findElement(By.name("password")).sendKeys("123@456b78");
    driver.findElement(By.name("login")).click();
    driver.findElement(By.linkText("Oeuvres par catégorie")).click();
    driver.findElement(By.linkText("Film")).click();
    driver.findElement(By.xpath("(//a[contains(text(),'Afficher Plus')])[5]")).click();
    driver.findElement(By.name("like")).click();
    driver.findElement(By.linkText("Numéro #1")).click();
    driver.findElement(By.linkText("Classement")).click();
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
