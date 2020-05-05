<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $mail = $_GET["email"];
      $chiocciola = strpos($mail, '@');
      if ($chiocciola > 1) {
        $risultato = "valida";
      }
      else{
        $risultato = "non valida";
      }
     ?>

     <h1><?php echo "email inserita : " .$mail;?></h1>
     <h1><?php echo "email " . $risultato; ?></h1>

  </body>
</html>
