<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie6_Exo3</title>
</head>
<body>
  <?php
  //Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
  // index.php?startDate=2/05/2016&endDate=27/11/2016
  ?>
  <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Envoi Info dans l'URL</a>
  <?php
  if (isset($_GET['startDate'])){
    //isset — Détermine si une variable est définie et est différente de NULL
    ?>
    <p><?php echo 'La date de début est définie' . ' ' . $_GET['startDate']; ?></p>
    <?php
  } else {?>
    <p>Le paramétre date de début n'est pas présent dans l'URL</p>
    <?php
  }
  ?>
  <?php
  if (isset($_GET['endDate'])){
    ?>
    <p><?php echo 'La date de fin est définie' . ' ' . $_GET['endDate']; ?></p>
    <?php
  } else {?>
    <p>Le paramétre date de fin  n'est pas présent dans l'URL</p>
    <?php
  }
  ?>
</body>
</html>
