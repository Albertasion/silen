<?php
namespace Facebook\WebDriver;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

require_once('vendor/autoload.php');

// This is where Selenium server 2/3 listens by default. For Selenium 4, Chromedriver or Geckodriver, use http://localhost:4444/
$host = 'http://localhost:9515';

$capabilities = DesiredCapabilities::chrome();

$driver = RemoteWebDriver::create($host, $capabilities);

// navigate to Selenium page on Wikipedia
$driver->get('https://www.kramp.com/shop-ua/uk');




$button = $driver->findElement(WebDriverBy::cssSelector('.primary'));
$button->click();

$input = $driver->findElement(WebDriverBy::tagName('input'));
$input->sendKeys("AL-KO")->submit();
$driver->executeScript('window.scrollTo(0, document.body.scrollHeight);');