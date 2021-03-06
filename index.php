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
            <!-- La variable $pageRef contient la valeur du paramètre page du GET -->
            <p><?= $xml->page[$pageRef - 1]->content ?></p>
            <!-- on vérifie que les champs existent et qu'ils sont valide sinon on affiche les messages d'erreur -->
            <p class="text-danger text-center font-weight-bold"> <?= isset($formError['your-name']) ? $formError['your-name'] : ' '; ?></p>
            <p class="text-danger text-center font-weight-bold"> <?= isset($formError['your-email']) ? $formError['your-email'] : ' '; ?></p>
            <p class="text-danger text-center font-weight-bold"> <?= isset($formError['your-tel-615']) ? $formError['your-tel-615'] : ' '; ?></p>
            <p class="text-danger text-center font-weight-bold"> <?= isset($formError['your-subject']) ? $formError['your-subject'] : ' '; ?></p>
            <p class="text-danger text-center font-weight-bold"> <?= isset($formError['your-ville']) ? $formError['your-ville'] : ' '; ?></p>
            <p class="text-danger text-center font-weight-bold"> <?= isset($formError['your-message']) ? $formError['your-message'] : ' '; ?></p>
            <p class="text-success text-center font-weight-bold"> <?= isset($_POST['send']) && count($formError) == 0 ? 'Message envoyé !' : ' '; ?></p>
        </div>
        <footer>
            <div class="footer-copyright text-center py-3">© 2018 Copyright - Maçonnerie Ocardo</div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" ></script>
    </body>

</html>
