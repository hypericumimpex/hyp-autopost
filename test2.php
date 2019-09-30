<?php 

echo 'loading....';

//curl ini
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT,20);
curl_setopt($ch, CURLOPT_REFERER, 'http://www.bing.com/');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
curl_setopt($ch, CURLOPT_MAXREDIRS, 5); // Good leeway for redirections.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Many login forms redirect at least once.
curl_setopt($ch, CURLOPT_COOKIEJAR , "cookie.txt");


//curl get
$x='error';
$url='https://www.amazon.com/s?k=cell+accessories&qid=1563641454&ref=sr_pg_2&page=1';
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_URL, trim($url));
curl_setopt ( $ch, CURLOPT_ENCODING, "" );
$exec=curl_exec($ch);
$x=curl_error($ch);


echo $exec.$x;



exit;

// Report all PHP errors (see changelog)
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


 //curl ini
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT,20);
curl_setopt($ch, CURLOPT_REFERER, 'http://www.bing.com/');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
curl_setopt($ch, CURLOPT_MAXREDIRS, 5); // Good leeway for redirections.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Many login forms redirect at least once.
curl_setopt($ch, CURLOPT_COOKIEJAR , "cookie.txt");

//change address
//curl post
$curlurl="https://www.amazon.com/gp/delivery/ajax/address-change.html";
$curlpost="parameters";
curl_setopt($ch, CURLOPT_URL, $curlurl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'locationType=LOCATION_INPUT&zipCode=10001&storeContext=gateway&deviceType=web&pageType=Search&actionSource=glow'); 
$x='error';
$exec=curl_exec($ch);
$x=curl_error($ch);

//curl get
$x='error';
$url='https://www.amazon.com/s?k=pizza&ref=nb_sb_noss_2';
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_URL, trim($url));
$exec=curl_exec($ch);
$x=curl_error($ch);

echo $exec.$x;
exit;

require_once('inc/class.amazon.api.less.php');

try {
	$amazonClass = new wp_automatic_amazon_api_less($ch , 'com');
	$ret = $amazonClass->getItemByAsin('B07HYGVQMZ');
	
	echo '<pre>';
	print_r($ret);
	
} catch (Exception $e) {
	echo ' Exc:'.$e->getMessage();
}

exit;

//$ret = $amazonClass->getItemByKeyword('iphone',2, 'phone');


exit;



?>