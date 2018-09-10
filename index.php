<?php
$fichier = 'source.xml';
$xml = simplexml_load_file($fichier);

// foreach($fichierxml->page as $page) {
//   echo "<b>$page->content</b><br>";
//
//   }
  print_r($xml);
?>
