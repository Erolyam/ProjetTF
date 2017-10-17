package acceptance;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;

import cucumber.api.java.en.Given;
import cucumber.api.java.en.Then;
import cucumber.api.java.en.When;

public class UserInscriptionFixture {
	
	private WebDriver driver;
	private String baseUrl;

    public UserInscriptionFixture() {
    	System.setProperty(DriversData.DRIVER, DriversData.getDriverLocation());
        driver = new FirefoxDriver();    
        baseUrl = DriversData.BASE_URL;
        driver.manage().timeouts().implicitlyWait(5, TimeUnit.SECONDS);
    }

    @Given("^L'utilisateur accede a la page d'inscription$")
    public void utilisateurAccedePageInscription() {
    	driver.get(baseUrl + "/ProjetTF/Source/views/users/register.php");
    }
    
    @When("^L'utilisateur remplit le formulaire incorrectement$")
    public void utilisateurRemplitFormulaireIncorrectement() throws Throwable {
    	driver.findElement(By.name("name")).clear();
        driver.findElement(By.name("name")).sendKeys("Diego");
        driver.findElement(By.name("lastname")).clear();
        driver.findElement(By.name("lastname")).sendKeys("Romero Rodriguez");
        driver.findElement(By.name("username")).clear();
        driver.findElement(By.name("username")).sendKeys("user1237");
        driver.findElement(By.name("email")).clear();
        driver.findElement(By.name("email")).sendKeys("dromeror55@hotmail.com");
        driver.findElement(By.name("password")).clear();
        driver.findElement(By.name("password")).sendKeys("asdas123");
        driver.findElement(By.name("passconf")).clear();
        driver.findElement(By.name("passconf")).sendKeys("asdas123");
        driver.findElement(By.name("age")).clear();
        driver.findElement(By.name("age")).sendKeys("-1");
        driver.findElement(By.xpath("//button[@type='submit']")).click();
    }

    @Then("^Une erreur signalant que l'utilisateur n'a pas ete inscrit est affichee$")
    public void erreurUtilisateurPasInscrit(){
    	try{
    		driver.findElement(By.name("error"));
    		driver.quit();
    	}catch(Exception e){
    		driver.quit();
    		throw e;
    	}
    }

}
