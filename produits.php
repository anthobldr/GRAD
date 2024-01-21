<?php
require('./assets/components/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/Projet_GRAD/assets/css/styles.css" />
    <title>Website | Produits</title>
</head>
<body>
<header>
<?php require('./assets/components/navbar.php'); ?>
</header>
<section class="produits header text-center">
  <h1 class="display-5 fw-bold">Nos Produits</h1>
</section>
<section class="container etp pt-5 pb-5">
  <div class="row">
    <div class="col-md-6 pt-4">
      <small class="text-start">Nos produits</small>
      <h3 class="text-start pt-2">Mélanger Qualité & Naturel, chez nous c'est possible !</h3>
      <p class="pt-2 text-body-secondary">En faisant appel à nos équipes, vous ne participez pas à la déforestation de notre planète ! Chez GRAD, l'aspect écologique et environnemental est important ! C'est pour cela que nous privilégions des pratiques respectueuses de la nature.</p>
    </div>
    <div class="col-md-6 text-end img">
      <img src="/Projet_GRAD/assets/img/header/produits_img.jpg" width="90%" alt="À propos de nous" />
    </div>
  </div>
</section>
<div class="container sep"></div>
<section class="container produits-list">
  <h2 class="text-center m-4">Liste des produits</h2>
  <?php
    $getProduits = $bdd->query('SELECT * FROM Produits');
            
    if($getProduits->rowCount() === 0) {
        echo "<center class=\"pb-5\">Aucun produit est actuellement mis en vente.</center>";
    } else {
      ?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
        while($Produits = $getProduits->fetch()){
      ?>
      <div class="col mb-5">
        <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
          <img src="<?= $Produits['produits_image'];?>" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title text-center"><?= $Produits['produits_name'];?></h5>
            <p class="card-text text-center"><?= $Produits['produits_texte'];?></p>
            <p class="badge text-bg-secondary">Prix: <?= $Produits['produits_prix'];?>€ TTC</p>
          </div>
        </div>
      </div> 
    <?php
      }
    }
  ?>
</section> 
<?php require('./assets/components/footer.html'); ?>
</body>
</html>