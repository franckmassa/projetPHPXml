<?php include 'controller.php'; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <title>Maçonnerie Ocordo</title>
  </head>
  <body>
    <div class="container-fluid">
    <?php for ($i=0; $i < $sizeTab ; $i++) { ?>
      <a href="<?php echo $xml->page[$i]['id'] ?>"><?php echo $xml->page[$i]->menu ?></a>
    <?php } ?>
      <p><?php echo $xml->page[0]->content; ?></p>
    </div>
  </body>
</html>
