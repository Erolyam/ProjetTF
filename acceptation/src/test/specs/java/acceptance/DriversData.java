package acceptance;

import java.io.File;

public class DriversData {
	
	public static final String BASE_URL = "http://localhost/";
	
	public static final String DRIVER = "webdriver.gecko.driver";
	
	//public static final String DRIVER_LOCATION = "C:\\xampp-full\\htdocs\\ProjetTF\\Test\\Selenium\\drivers\\geckodriver.exe";

	public static String getDriverLocation()
	{
		String pathToGeckoDriver = "Selenium" + File.separator + "drivers" + File.separator;

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
		return pathToGeckoDriver;
	}
	
}
