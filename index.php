<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Découvrez dès maintenant notre société eko-resposable pour de meilleures économies environnementales." />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./Style/style.css">
  <link rel="icon" href="./Images/DA/logo.png" type="image/png">
  <script src="https://kit.fontawesome.com/798437e148.js" crossorigin="anonymous"></script>
  <title>Eko</title>
</head>

<body id="index">
 
  <!-- Grand titre + NAVBAR-->
  <section class="et-hero-tabs">
    <div class="titleone">
      <h1>EKO</h1>
      <h3>Eko-responsable / Eko-nomique / Eko-logique</h3>
    </div>
    <?php
      include 'boutton_compte.php';
    ?>
    <!-- NAVBAR -->
    <div class="et-hero-tabs-container">
      <a class="et-hero-tab" href="#tab-es6">Acheter</a>
      <a class="et-hero-tab" href="#tab-flexbox">Actualité</a>
      <a class="et-hero-tab" href="#tab-react">Vendre sur EKO</a>
      <a class="et-hero-tab" href="#tab-abonnement">Abonnements</a>
      <a class="et-hero-tab" href="#tab-angular">Contact</a>
      <a class="et-hero-tab" href="#tab-other">A Propos</a> 
      <span class="et-hero-tab-slider"></span>
    </div>
  </section>

  <main class="et-main">
    <!-- Premiere partie avec le liens vers les pages des articles -->
    <section class="et-slide" id="tab-es6">
      <h1>Nos Articles</h1>
      <div class="container red topBotomBordersOut">
        <a href="./stripe/categorie_produit/page_produit_2.php">Littérature</a>
        <a href="./stripe/categorie_produit/page_produit_3.php">Bricolage</a>
        <a href="./stripe/categorie_produit/page_produit_1.php">Mode / Beauté</a>
        <a href="./stripe/categorie_produit/page_produit_4.php">Musique / Jeux vidéo</a>
        <a href="./stripe/categorie_produit/page_produit_5.php">Medecine</a>
      </div>
    </section>

    <!-- Partie vers l'actualite -->
    <section class="et-slide" id="tab-flexbox">
      <a href="./actualite.php"><h1>Actualité</h1></a>
      <a href="./actualite.php"><h3>Toute l'actualité EKO-logique a portée de main</h3></a>
    </section>

    <!-- Partie vers les options de vente -->
    <section class="et-slide" id="tab-react">
      <a href="./vendre_eko.php"><h1>Vendez sur EKO</h1></a>
      <a href="./vendre_eko.php"><h3>Profitez des services d'EKO pour vendre vos articles a vos voisins</h3></a>
    </section>

    <!-- Partie vers les options de'abonnement -->
    <section class="et-slide" id="tab-abonnement">
    <a href="./abonnement_eko.php"><h1>Abonnement sur EKO</h1></a>
      <a href="./abonnement_eko.php"><h3>Profitez des services d'abonnements EKO pour une meilleurs expérience!</h3></a>
    </section>

    <!-- Partie vers l'option 'Nous contacter' -->
    <section class="et-slide" id="tab-angular">
      <a href="./contact.php"><h1>Nous Contacter</h1></a>
      <a href="./contact.php"><h3>Vous avez des questions ? Posez les nous</h3></a>
    </section>

    <!-- Partie vers la page A PROPOS D'EKO -->
    <section class="et-slide" id="tab-other">
      <a href="./aboutus.php"><h1>A Propos de EKO</h1></a>
      <a href="./aboutus.php"><h3>Apprenez en plus sur EKO</h3></a>
</section>

  </main>

  <!-- Partie vers la page A PROPOS D'EKO -->
  <!-- Implementation des librairies necessaires -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
