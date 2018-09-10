<?php
$fichier = 'source.xml';
$xml = simplexml_load_file($fichier);

 // foreach($xml->page[1] as $page) {
 //  $page = $xml->page;
 //  $content = $xml->content;
 //  echo $page;

  // };

$page1Menu = $xml->page[0]->menu;
echo $page1Menu . ' ';
$page2Menu = $xml->page[1]->menu;
echo $page2Menu . ' ';
$page3Menu = $xml->page[2]->menu;
echo $page3Menu . ' ';
$page4Menu = $xml->page[3]->menu;
echo $page4Menu . ' ';

// $page1Title = $xml->page[0]->title;
// echo $page1Title;

$page1Content = $xml->page[0]->content;
echo $page1Content;

?>
