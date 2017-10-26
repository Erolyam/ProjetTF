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

public class UC3AjoutDesCommentairesParDesAnonymes {
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
  public void testUC3AjoutDesCommentairesParDesAnonymes() throws Exception {
    driver.get(baseUrl + "/~m2test5/ProjetTF/Source/views/gallerie/gallerie.php");
//    driver.findElement(By.linkText("NumACCENTro #1")).click();
//    driver.findElement(By.linkText("Oeuvres par catACCENTgorie")).click();
//    driver.findElement(By.linkText("Film")).click();
//    driver.findElement(By.xpath("(//a[contains(text(),'Afficher Plus')])[5]")).click();
//    driver.findElement(By.name("AddComment")).click();
//    driver.findElement(By.linkText("CrACCENTer un compte")).click();
//    driver.findElement(By.name("name")).clear();
//    driver.findElement(By.name("name")).sendKeys("Test");
//    driver.findElement(By.name("lastname")).clear();
//    driver.findElement(By.name("lastname")).sendKeys("testa");
//    driver.findElement(By.name("username")).clear();
//    driver.findElement(By.name("username")).sendKeys("Testtest");
//    driver.findElement(By.name("email")).clear();
//    driver.findElement(By.name("email")).sendKeys("test@test.test");
//    driver.findElement(By.name("password")).clear();
//    driver.findElement(By.name("password")).sendKeys("test0123@");
//    driver.findElement(By.name("passconf")).clear();
//    driver.findElement(By.name("passconf")).sendKeys("test0123@");
//    driver.findElement(By.name("age")).clear();
//    driver.findElement(By.name("age")).sendKeys("24");
//    driver.findElement(By.name("photo")).clear();
//    driver.findElement(By.name("photo")).sendKeys("C:\\Users\\Sammy\\Desktop\\22089571_1527708323934578_2836539044908345682_n.jpg");
//    driver.findElement(By.xpath("//button[@type='submit']")).click();
//    driver.findElement(By.linkText("Se connecter")).click();
//    driver.findElement(By.name("username")).clear();
//    driver.findElement(By.name("username")).sendKeys("Testtest");
//    driver.findElement(By.name("password")).clear();
//    driver.findElement(By.name("password")).sendKeys("test0123@");
//    driver.findElement(By.name("login")).click();
//    driver.findElement(By.linkText("Oeuvres par catACCENTgorie")).click();
//    driver.findElement(By.linkText("Film")).click();
//    driver.findElement(By.xpath("(//a[contains(text(),'Afficher Plus')])[5]")).click();
//    driver.findElement(By.name("comment")).clear();
//    driver.findElement(By.name("comment")).sendKeys("Test");
//    driver.findElement(By.name("AddComment")).click();
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
