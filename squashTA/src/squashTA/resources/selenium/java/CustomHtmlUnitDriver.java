import org.openqa.selenium.htmlunit.HtmlUnitDriver;

import com.gargoylesoftware.htmlunit.SilentCssErrorHandler;

public class CustomHtmlUnitDriver extends HtmlUnitDriver
{
	public CustomHtmlUnitDriver()
	{
		getWebClient().setCssErrorHandler(new SilentCssErrorHandler());
	}
}