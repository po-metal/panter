<?php

require './vendor/autoload.php'; // Composer's autoloader
$_SERVER['PANTHER_NO_HEADLESS'] = true;


$client = \Symfony\Component\Panther\Client::createChromeClient();


try {
    $crawler = $client->request('GET', 'https://web.whatsapp.com/'); // Yes, this website is 100% in JavaScript

    $client->takeScreenshot('screen.png'); // Yeah, screenshot!


    $client->waitFor('#pane-side', 3600);

    /*
    $result =  $crawler->filter('._3TEwt')->each(function (\Symfony\Component\DomCrawler\Crawler $node, $i) {

        echo $node->text()."<br>";
    });
*/

    #$link = $crawler->filter('_2cLHw');
    #$link = $crawler->selectLink('.jN-F5')->link();
    #$client->click($link);


    echo "Espero input"."<br>";
    $client->waitFor('.jN-F5', 3600);
    echo "Busco y envio holaRamon"."<br>";



    $crawler->filter('.jN-F5')->sendKeys(\Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);
    $crawler->sendKeys(\Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);

    sleep(1);
    $crawler->sendKeys(\Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);
    sleep(1);
    $crawler->sendKeys(\Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);
    sleep(1);
    $crawler->sendKeys(\Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);
    sleep(1);
    $crawler->sendKeys(\Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);


    sleep(10);
    echo "Tomo Screen"."<br>";
    $client->takeScreenshot('otra.png'); // Yeah, screenshot!



} catch (\RuntimeException $e) {
    $client->close();
}catch (\Exception $e) {
    $client->close();
}



$client->close();