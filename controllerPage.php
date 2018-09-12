<?php
$fichier = 'source.xml';
$xml = simplexml_load_file($fichier);

// Permet de déterminer le nombre de pages présentes dans le fichiers html
$PageNumber = count($xml->page);

// Vérifie que le paramètre page existe
if (isset($_GET['page'])) {
    // permet de récupérer le numéro de la page
    $pageRef = intval(htmlspecialchars($_GET['page']));
    // sinon la variable $pageRef prend la valeur 0 (page 1)
} else {
    $pageRef = 0;
}
?>

