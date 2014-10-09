<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/cdp_website/vue/");
  }

  public function testMyTestCase()
  {
    $this->open("/cdp_website/vue/");
    $this->click("link=listeAteliers.php");
    $this->waitForPageToLoad("30000");
    $this->click("//tr[11]/td[5]/a[2]/img");
    $this->waitForPageToLoad("30000");
  }
}
?>