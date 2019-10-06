<?php

$youtube_time = 'PT1H1S';

$start = new DateTime('@0'); // Unix epoch
$start->add(new DateInterval($youtube_time));
echo  $start->format('H:i:s');

exit;


$exec = file_get_contents('test.txt');

$doc = new DOMDocument ();
@$doc->loadHTML ( $exec );

$xpath = new DOMXpath ( $doc );

// title
$elements = $xpath->query ( '//*[@id="priceblock_saleprice"]' );

var_dump($elements);

exit;
require_once('inc/class.dom.php');

 
$wpAutomaticDom = new wpAutomaticDom(file_get_contents('test.txt'));

  
$items = $wpAutomaticDom->getContentByID('priceblock_saleprice');

var_dump($items);