<?php include 'controller.php'; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Maçonnerie Ocordo</title>
  </head>
  <body>
    <div class="container-fluid">
    <!-- Boucle permettant d'afficher le menu de navigation en utilisant le nombre de page calculé dans la variable $PageNumber -->
    <?php for ($i = 1; $i <= $PageNumber; $i++) { ?>
      <!-- Lien ajoutant page + la valeur de la variable $i + .html à l'url -->
      <a name="page" href="page<?php echo $i ?>.html"><?php echo $xml->page[$i-1]->menu ?></a>
    <?php } ?>
    <!-- Permet d'afficher le noeud(balise) content en fonction de la valeur de la variable $pageRef -->
    <!-- La variable $pageRef contient la valeur du paramètre page du GET -->
      <p><?php echo $xml->page[$pageRef-1]->content ?></p>
    </div>
  </body>
</html>
