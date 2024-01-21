<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <title>Website | Réalisations</title>
</head>
<body>
<header>
<?php require('./assets/components/navbar.html'); ?>
</header>
<section class="realisations header text-center">
  <h1 class="display-5 fw-bold">Nos Réalisations</h1>
</section>
<section class="container etp pt-5 pb-5">
  <div class="row">
    <div class="col-md-6 pt-4">
      <small class="text-start">Nos réalisations</small>
      <h3 class="text-start pt-2">Des projets personnalisés conçus selon vos besoins et vos préférences !</h3>
      <p class="pt-2 text-body-secondary">En faisant appel à nos équipes, vous ne participez pas à la déforestation de notre planète ! Chez GRAD, l'aspect écologique et environnemental est important ! C'est pour cela que nous privilégions des pratiques respectueuses de la nature.</p>
    </div>
    <div class="col-md-6 text-end img">
      <img src="/Projet_GRAD/assets/img/SLIDER/entete03.jpg" width="90%" alt="À propos de nous" />
    </div>
  </div>
</section>
<div class="container sep"></div>
<section class="container-fluid realisations-list">
  <h2 class="text-center m-4">Liste de nos réalisations</h2>
  <div class="row">
  <?php
    $dir = './assets/img/realisations/';
    $files1 = scandir($dir);

    if (count($files1) > 2) {
        for ($i = 2; $i < count($files1); $i++) {
            echo "<div class=\"col-md-3 items\"><a href=\"./assets/img/realisations/" . $files1[$i] . "\"><img src=\"./assets/img/realisations/" . $files1[$i] . "\" /></a></div> \n";
        }
    } else {
        echo "<center class=\"pb-5\">Aucune prestation n'a été insérée pour le moment.</center>";
    }
  ?>
  </div>
</section>
<?php require('./assets/components/footer.html'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>