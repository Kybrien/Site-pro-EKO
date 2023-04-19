<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Images/DA/logo.png" type="image/png">
    <title>Eko</title>
</head>
<body id="actualite">
<div class="et-hero-tabs-container-actualite">
      <a class="et-hero-tab" href="./index.php">Accueil</a>
      <a class="et-hero-tab" href="https://www.baimmobilier.fr/eko/#tab-es6">Acheter</a>
      <a class="et-hero-tab" href="./vendre_eko.php">Vendre sur EKO</a>
      <a class="et-hero-tab" href="./contact.php">Contact</a>
      <a class="et-hero-tab" href="./aboutus">A Propos</a>
      <span class="et-hero-tab-slider"></span>
    </div>
    <div style="max-height:0px" class="resp-card_abonnement">
    <?php
      include 'boutton_compte.php';
    ?>
    <?php
        session_start();
        require("./connection/database.php");
                
        if(isset($_SESSION["user"])){
            echo '<a style="max-height:0px" href="https://buy.stripe.com/test_4gw4hs2aUfyD1FKaEG">';
        }else{
        }
    ?>
    <div style="margin-left:10px;margin-top:300px" class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title_abonnement">Abonnement Bronze</p>
                    <p>Voici l'abonnement bronze qui convient aux débutants souhaitant mettre en ligne des produits disposant de quelques fonctionnalités.</p>
                </div>
                <div class="flip-card-back">
                    <p class="title_abonnement">AVANTAGES</p>
                    <p>Coùt abordable : C'est le forfait le moins cher et donc accessible à la plupart des clients.</p>
                </div>
            </div>
        </div>
        <?php
            session_start();
            require("./connection/database.php");
                    
            if(isset($_SESSION["user"])){
                echo '<a style="max-height:0px" href="https://buy.stripe.com/test_9AQcNY8zi0DJ7048wD">';
            }else{
            }
        ?>
        <div style="margin-left:10px;margin-top:300px" class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title_abonnement">Abonnement Gold</p>
                    <p>L'abonnement Gold offres de nombreux avantages pour les acheteurs en ligne et pour les personnes qui souhaitent vendre.</p>
                </div>
                <div class="flip-card-back">
                    <p class="title_abonnement">AVANTAGES</p>
                    <p>Assistance clientèle prioritaire : En cas de problème avec votre commande ou avec un produit, vous pouvez bénéficier d'une assistance rapide et efficace de la part de l'équipe d'assistance clientèle.</p>
                </div>
            </div>
        </div>
        <?php
            session_start();
            require("./connection/database.php");
                    
            if(isset($_SESSION["user"])){
                echo '<a style="max-height:0px" href="https://buy.stripe.com/test_8wMaFQ9DmfyD2JOaEM">';
            }else{
            }
        ?>
        <div style="margin-left:10px;margin-top:300px" class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title_abonnement">Abonnement Diamant</p>
                    <p>L' abonnement diamant vous donne accès à des offres exclusives. Vous bénéficiez également d'une assistance clientèle haut de gamme.</p>
                </div>
               <div class="flip-card-back">
                    <p class="title_abonnement">AVANTAGES</p>
                    <p>En cas de problème avec votre commande ou avec un produit, vous pouvez bénéficier d'une assistance rapide et efficace de la part d'un conseiller dédié.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>