import java.io.File;
import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;

import org.omg.CORBA.Environment;
import org.openqa.selenium.*;
import org.openqa.selenium.support.ui.Select;


import org.openqa.selenium.htmlunit.HtmlUnitDriver;

public class UserInscriptionWD {
	private HtmlUnitDriver driver;
	private String baseUrl;
	private boolean acceptNextAlert = true;
	private StringBuffer verificationErrors = new StringBuffer();

	@Before
	public void setUp() throws Exception {

		driver = new CustomHtmlUnitDriver();
		baseUrl = "http://localhost/ProjetTF/Source/views/users/register.php";
		driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
	}

	@Test
	public void testUserInscriptionWD() throws Exception {
		driver.get(baseUrl);
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
//		driver.findElement(By.xpath("//button[@type='submit']")).click();
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