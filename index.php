<?php include 'controller.php'; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="assets/style.css" />
    <title>Maçonnerie Ocordo</title>
  </head>
  <body>
    <div class="container-fluid">
        <nav>
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
    <?php for ($i=0; $i < $sizeTab ; $i++) { ?>
        <li><a href="<?php echo $xml->page[$i]['id'] ?>"><?php echo $xml->page[$i]->menu ?></a></li>
    <?php } ?>
      </ul>
    </div>
  </nav>
      <p><?php echo $xml->page[0]->content; ?></p>
    </div>
  </body>
</html>
