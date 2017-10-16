package user;

import java.io.File;
import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;

import org.omg.CORBA.Environment;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class UserInscriptionWD {
  private WebDriver driver;
  private String baseUrl;
  private boolean acceptNextAlert = true;
  private StringBuffer verificationErrors = new StringBuffer();

  @Before
  public void setUp() throws Exception {
    String pathToGeckoDriver = ".." + File.separator + ".." + File.separator + "Selenium" + File.separator + "drivers" + File.separator;

    String osProperty = System.getProperty("os.name").toLowerCase();
    int archProperty = Integer.parseInt(System.getProperty("sun.arch.data.model"));

    if (osProperty.indexOf("win") >= 0)
    {
      pathToGeckoDriver += "geckodriver.exe"; // Windows
    }
    else if (osProperty.indexOf("nix") >= 0 || osProperty.indexOf("nux") >= 0 || osProperty.indexOf("aix") > 0 )
    {
      if (archProperty == 64)
      {
        pathToGeckoDriver += "geckodriver64"; //linux 64 bits
      }
      else
      {
        pathToGeckoDriver += "geckodriver32"; //linux 32 bits
      }
    }

    System.out.println(java.nio.file.Paths.get(pathToGeckoDriver).toAbsolutePath().toString());
    System.out.println(System.getProperty("user.dir"));
    System.out.println(pathToGeckoDriver);

    System.setProperty("webdriver.gecko.driver", pathToGeckoDriver);
    driver = new FirefoxDriver();
    baseUrl = "http://localhost/";
    driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
  }

  @Test
  public void testUserInscriptionWD() throws Exception {
    driver.get(baseUrl + "/ProjetTF/Source/views/users/register.php");
    driver.findElement(By.name("name")).clear();
    driver.findElement(By.name("name")).sendKeys("Diego");
    driver.findElement(By.name("lastname")).clear();
    driver.findElement(By.name("lastname")).sendKeys("Romero Rodriguez");
    driver.findElement(By.name("username")).clear();
    driver.findElement(By.name("username")).sendKeys("user123");
    driver.findElement(By.name("email")).clear();
    driver.findElement(By.name("email")).sendKeys("dromeror4@hotmail.com");
    driver.findElement(By.name("password")).clear();
    driver.findElement(By.name("password")).sendKeys("asdas123");
    driver.findElement(By.name("passconf")).clear();
    driver.findElement(By.name("passconf")).sendKeys("asdas123");
    driver.findElement(By.name("age")).clear();
    driver.findElement(By.name("age")).sendKeys("23");
    driver.findElement(By.xpath("//button[@type='submit']")).click();
  }

  @After
  public void tearDown() throws Exception {
    /*driver.quit();
    String verificationErrorString = verificationErrors.toString();
    if (!"".equals(verificationErrorString)) {
      fail(verificationErrorString);
    }*/
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
