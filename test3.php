<?php

 

$res['cont'] = '<div id="first">First</div> Second';

require_once 'inc/sxmldom_simple_html_dom.php';

$original_html = sxmldom_str_get_html($res['cont']);

echo $original_html;

$finds = $original_html->find('*[id=first]');

echo '<pre>';

echo count($finds);

print_r($finds);

