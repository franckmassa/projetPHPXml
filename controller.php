<?php
$fichier = 'source.xml';
$xml = simplexml_load_file($fichier);

$page = $xml->page;
$sizeTab = count($page);

?>
