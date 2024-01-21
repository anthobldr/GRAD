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
    <title>Website | Accueil</title>
</head>
<body>
  <header>
    <?php require('./assets/components/navbar.php'); ?>
  </header>
  <section class="header text-center">
    <h1 class="display-5 fw-bold">SAS GRAD</h1>
    <div class="col-lg-6 p-3 mx-auto">
      <p class="lead mb-4">L'art de sublimer vos espaces extérieurs en bois !</p>
    </div>
  </section>
  <section class="container-fluid infos">
    <h2 class="text-center m-4">Spécialiste des térasses en bois</h2>
    <div class="row mt-3">
      <div class="col-md-4 text-center" id="items">
        <a href="./prestations.php">
          <img class="terrases" src="/Projet_GRAD/assets/img/infos/bois.png"/>
          <h4 class="m-3">Nos térasses</h4>
        </a>
      </div>
      <div class="col-md-4 text-center" id="items">
        <img class="terrases" src="/Projet_GRAD/assets/img/infos/materiaux.png"/>
        <h4 class="m-3">Nos matériaux</h4>
      </div>
      <div class="col-md-4 text-center" id="items">
        <a href="./contact.php">
          <img class="terrases" src="/Projet_GRAD/assets/img/infos/devis.png"/>
          <h4 class="m-3">Devis gratuit</h4>
        </a>
      </div>
    </div>
  </section>
  <section class="container prestations-infos pt-5 pb-5">
    <div class="row">
      <div class="col-md-6 pt-4">
        <small class="text-start">À propos de nous</small>
        <h3 class="text-start pt-2">GRAD, votre société spécialiste<br> dans le bois.</h3>
        <p class="pt-2 text-body-secondary">Grad est une entreprise de création d’équipements extérieurs implantée depuis 1988 en Alsace, au Nord de Strasbourg.
          Spécialisée dans les aménagements extérieurs en mix-matières bois, grès cérame, aluminium, Inox, verre… et pionniers dans la terrasse, nous occupons depuis 2005 la place de leader national dans ce domaine.</p>
      </div>
      <div class="col-md-6 text-end img">
        <img src="/Projet_GRAD/assets/img/SLIDER/entete02.jpg" width="90%" alt="À propos de nous" />
      </div>
    </div>
  </section>
  <div class="container sep"></div>
  <section class="container services">
    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <small class="text-start">Nos services</small>
        <h3 class="text-start pt-2">Des services personnalisés selon <br>vos exigences.</h3>
        <p class="text-body-secondary">Nos services sont votre solution complète. Qualité, rapidité, et expertise inégalée garantissent une expérience client exceptionnelle. Faites confiance à notre engagement pour vos besoins essentiels.</p>
      </div>
      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2 service-items">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-yellow bg-gradient fs-4 rounded-3">
              <i class="fa-solid fa-stairs fa-rotate-90"></i>
            </div>
            <h4 class="mb-0">Les escaliers</h4>
            <p class="text-body-secondary">Des escaliers pensé pour vous simplifier la vie.</p>
          </div>
          <div class="col d-flex flex-column gap-2 service-items">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-yellow bg-gradient fs-4 rounded-3">
              <i class="fa-solid fa-fence"></i>
            </div>
            <h4 class="mb-0">Les Garde-Corps</h4>
            <p class="text-body-secondary">La sécurité et l’esthétique est le défi que nous avons relevé</p>
          </div>
          <div class="col d-flex flex-column gap-2 service-items">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-yellow bg-gradient fs-4 rounded-3">
              <i class="fa-solid fa-tally"></i>
            </div>
            <h4 class="mb-0">Les palissades</h4>
            <p class="text-body-secondary">Pour disposer de votre terrasse,<br> à l’abri des regards indiscrets.</p>
          </div>
          <div class="col d-flex flex-column gap-2 service-items">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-yellow bg-gradient fs-4 rounded-3">
              <i class="fa-regular fa-person-arrow-down-to-line"></i>
            </div>
            <h4 class="mb-0">Les terasses</h4>
            <p class="text-body-secondary">À la pointe de la technologie tout en étant écologique.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require('./assets/components/footer.html'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>