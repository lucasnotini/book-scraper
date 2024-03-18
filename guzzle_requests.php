<?php

# scraping books to scrape: https://books.toscrape.com/
require 'vendor/autoload.php';

#create guzzle object
$httpClient = new \GuzzleHttp\Client();
#make get request and save its response object
$response = $httpClient->get('https://books.toscrape.com/');
#get the body of the object and cast to a string
$htmlString = (string) $response->getBody();

#suppressing any warnings
libxml_use_internal_errors(true);

#parse the string using xml and assign it to the var xpath
$doc = new DOMDocument();
$doc->loadHTML($htmlString);
$xpath = new DOMXPath($doc);

#read the titles and prices with their xpath took from the browser
$titles = $xpath->evaluate('//ol[@class="row"]//li//article//h3/a');
$prices = $xpath->evaluate('//ol[@class="row"]//li//article//div[@class="product_price"]//p[@class="price_color"]');

#print each one
foreach ($titles as $key => $title) {
echo $title->textContent . ' @ '. $prices[$key]->textContent.PHP_EOL;
}

?>