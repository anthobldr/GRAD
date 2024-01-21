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
    <title>Website | Contact</title>
</head>
<body>
<header>
    <?php require('./assets/components/navbar.php'); ?>
</header>
<section class="realisations header text-center">
  <h1 class="display-5 fw-bold">Contact</h1>
</section>
<section class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center m-4">Contactez-nous</h2>
            <form id="ContactForm">
                <div class="form-group d-flex">
                    <div class="col">
                        <label for="InputNom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="InputNom" name="nom" required>
                    </div>
                    <div class="col">
                        <label for="InputPrenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="InputPrenom" name="prenom" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="InputEmail" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="InputMessage" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="InputMessage" rows="3" required></textarea>
                </div>
                <input class="btn btn-primary bg-green mb-3" type="submit" name="Envoyer" />
            </form>
        </div>
        <div class="col-md-6">
            <div class="contact-infos m-4">
                <h2>Informez-nous</h2>
                <p class="text-body-secondary">Utilisez le formulaire ci-contre pour nous contacter rapidement, que ce soit pour des précisions, des commentaires sur le site, des signalements de dysfonctionnements, ou toute autre question. Vos messages sont importants pour nous et nous répondons rapidement.</p>
            </div>
            <div class="sep" style="padding: 0;"></div>
            <div class="contact-infos m-4">
                <h2>Informations</h2>
                <p class="text-body-secondary"><i class="fa-solid fa-phone"></i>  07.50.76.38.61</p>
                <p class="text-body-secondary"><i class="fa-solid fa-envelope"></i>  contact.grad@gmail.com</p>
            </div>
        </div>
    </div>
</section>
<?php require('./assets/components/footer.html'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>