<?php include 'controller.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Russo+One|Titillium+Web" rel="stylesheet">         
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Maçonnerie Ocordo</title>
    </head>
    <body>
        <div class="container-fluid w-75">
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
                                <a class="nav-link" href="page<?php echo $i ?>.html"><?php echo $xml->page[$i - 1]->menu ?></a>
                            </li>
                        <?php } ?>
                    </ul>
            </nav> 
            <!-- Permet d'afficher le noeud(balise) content en fonction de la valeur de la variable $pageRef -->
            <!-- La variable $pageRef contient la valeur du paramètre page du GET -->
            <p><?php echo $xml->page[$pageRef - 1]->content ?></p>
        </div>
    </body>
</html>
