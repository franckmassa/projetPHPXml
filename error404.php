<?php include 'controllerForm.php'; ?>
<?php include 'controllerPage.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Dosis|Nanum+Gothic|Russo+One" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css" />
        <title><?= $xml->page[$pageRef - 1]->title ?></title>
    </head>
    <body>
        <div class="container-fluid w-75 rounded">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <!-- Boucle permettant d'afficher le menu de navigation en utilisant le nombre de page calculé dans la variable $PageNumber -->
                        <?php for ($i = 1; $i <= $PageNumber; $i++) { ?>
                            <li class="nav-item active">
                                <!-- Lien ajoutant page + la valeur de la variable $i + .html à l'url -->
                                <a class="nav-link" href="page<?= $i ?>.html"><?= $xml->page[$i - 1]->menu ?></a>
                            </li>
                        <?php } ?>
                    </ul>
            </nav>
            <!-- Permet d'afficher le noeud(balise) content en fonction de la valeur de la variable $pageRef -->
            <div id="textError">
              <h1 class="text-center">ERREUR 404</h1>
              <h2 class="text-center">Ouuuups ! La page demandée n'existe pas.</h2>
            </div>
      </div>
                <footer>
                    <div class="footer-copyright text-center py-3">© 2018 Copyright - Maçonnerie Ocardo</div>
                </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>

</html>
