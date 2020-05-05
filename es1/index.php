<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $nome = $_GET["name"];
      $cognome = $_GET["surname"];
     ?>
     <h1><?php echo 'Buongiorno Signor '. $nome . ' ' . $cognome;?></h1>
  </body>
</html>
