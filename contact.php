<!-- PHP pour envoyer toutes les donnees dans la BDD -->
<?php
require("./stripe/database_connection.php");

if(isset($_POST['contact_submit']))
{
extract($_POST);

$nom = $_POST['nom'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$message = $_POST['message'];

$variable_numero = (strval($_POST['numero']));
if (filter_var($email, FILTER_VALIDATE_EMAIL) ){
  if ($variable_numero != 0){


  $sql = $connect->prepare("INSERT INTO contact (id_c,nom,email,numero,message) VALUES (NULL, :nom, :email, :numero, :message)");

  $sql->execute(array(
      ':nom' => $nom,
      ':email' => $email,
      ':numero' => $numero,
      ':message' => $message
  ));

  }else{
    echo '<script>alert("j\'reconnais là c\'est pas un mail sa l\'ami");</script>';
}}else{
  echo '<script>alert("j\'reconnais là c\'est pas un mail sa l\'ami");</script>';
}

   
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="./Style/contact.css">
    <link rel="icon" href="./Images/DA/logo.png" type="image/png">
    <title>Contact</title>
  </head>
  <body id="contact">
    <?php
      include 'boutton_compte.php';
    ?>
    <!-- NAVBAR -->
    <div class="et-hero-tabs-container">
    <a class="et-hero-tab" href="https://www.baimmobilier.fr/eko/index.php">Accueil</a>
    <a class="et-hero-tab" href="https://www.baimmobilier.fr/eko/index.php#tab-es6">Acheter</a>
    <a class="et-hero-tab" href="https://www.baimmobilier.fr/eko/vendre_eko.php">Vendre sur EKO</a>
    <a class="et-hero-tab" href="./aboutus">A Propos</a>
      <span class="et-hero-tab-slider"></span>
    </div>
    <div class="background">
      <div class="container">
        <div class="screen">
          <!-- Haut de la case avec les petites ellipses de couleur -->
          <div class="screen-header">
            <div class="screen-header-left">
              <div class="screen-header-button close"></div>
              <div class="screen-header-button maximize"></div>
              <div class="screen-header-button minimize"></div>
            </div>
            <div class="screen-header-right">
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
            </div>
          </div>
          <!-- Titre de la grande case 'Nous contacter' -->
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>NOUS</span>
                <span>CONTACTER</span>
              </div>
              <!-- Info avec le numero de tel en bas a gauche de la case -->
              <div class="app-contact">En cas de problemes :<br><br>+33 07 ** ** ** **</div>
            </div>
            <div class="screen-body-item">
              <form method="post" class="app-form">
                <div class="app-form-group">
                  <!-- NOM -->
                  <input class="app-form-control" type="text" name ="nom" placeholder="NOM" required>
                </div>
                <div class="app-form-group">
                  <!-- EMAIL -->
                  <input class="app-form-control" type="email" name ="email" placeholder="EMAIL" required>
                </div>
                <div class="app-form-group">
                  <!-- TEL -->
                  <input class="app-form-control" type="number" name ="numero" placeholder="NUMERO DE TELEPHONE" required>
                </div>
                <div class="app-form-group message">
                  <!-- MESSAGE -->
                  <input class="app-form-control" type="text"  name ="message" placeholder="MESSAGE" required>
                </div>
                <div class="app-form-group buttons">
                  <!-- Faire le lien avec le bouton ce dessous pour envoyer les donnees dans une BDD -->
                  <a><input type="submit" name="contact_submit" class="app-form-button" value="Envoyer"></input></a>
                </div>
              </form>
              <a id="button_acceuil_contact" href="https://www.baimmobilier.fr/eko/"><button class="app-form-button">Accueil</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>