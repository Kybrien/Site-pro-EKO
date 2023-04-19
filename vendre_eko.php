<?php
require("./stripe/database_connection.php");

if(isset($_POST['publication']))
  {
    $variable_prix = (intval($_POST['prix']));
    $variable_stock = (strval($_POST['max']));

    echo $variable_stock;
    echo $variable_prix;

      $categorie = $_POST["categorie"];
      $image_name = $_FILES['fichier']['name'];
      $file_size = $_FILES['fichier']['size'];
      extract($_POST);
 
  if ($categorie == 'mods_beaute' && $variable_stock != 0 && $variable_prix != 0 && $variable_categorie == 0) {

    $origine = $_FILES['fichier']['tmp_name'];

    $file_path = $origine;



    if($image_info = @getimagesize($file_path))
    {
      if ($image_info === false) {
        echo "Impossible de récupérer les informations sur l'image.";
    } else {
        $mime_type = $image_info["mime"];

        if ($mime_type !== "image/png" and $mime_type !== "image/jpeg" ) {
        } else {

            $sql = $connect->prepare("INSERT INTO produit_categorie_1 (id,name,image, price, quantity_max) VALUES (NULL, :name, :image_name, :prix,:max)");

            $sql->execute(array(
                ':name' => $name,
                ':image_name' => $image_name,
                ':prix' => $prix,
                ':max' => $max
      ));

      
      
      $destination = 'stripe/images/'.$_FILES['fichier']['name'];
      
      move_uploaded_file($origine,$destination);

      echo '<script>alert("Produit ajouté avec succès!");</script>';

        }
    }
    }else{
       echo '<script>alert("Seulement les fichiers PNG / JPEG sont acceptés");</script>';
    }

      

  }else{
    echo '<script>alert("Ola l\'ami qu\'est-ce que t\'essaye de faire là");</script>';
  }

  if ($categorie == 'pharmacie_soins_corps' && $variable_stock !=0 && $variable_prix !=0) {

    $origine = $_FILES['fichier']['tmp_name'];

    $file_path = $origine;



    if($image_info = @getimagesize($file_path))
    {
      if ($image_info === false) {
        echo "Impossible de récupérer les informations sur l'image.";
    } else {
        $mime_type = $image_info["mime"];

        if ($mime_type !== "image/png" and $mime_type !== "image/jpeg" ) {



        } else {

            $sql = $connect->prepare("INSERT INTO produit_categorie_5 (id,name,image, price, quantity_max) VALUES (NULL, :name, :image_name, :prix,:max)");

            $sql->execute(array(
                ':name' => $name,
                ':image_name' => $image_name,
                ':prix' => $prix,
                ':max' => $max
      ));

      
      
      $destination = 'stripe/images/'.$_FILES['fichier']['name'];
      
      move_uploaded_file($origine,$destination);

      echo '<script>alert("Produit ajouté avec succès!");</script>';
        }
    }
    }else{
       echo '<script>alert("Seulement les fichiers PNG / JPEG sont acceptés");</script>';
    }

      

  }


  if ($categorie == 'maison_bricolage' && $variable_stock !=0 && $variable_prix !=0) {

    $origine = $_FILES['fichier']['tmp_name'];

    $file_path = $origine;



    if($image_info = @getimagesize($file_path))
    {
      if ($image_info === false) {
        echo "Impossible de récupérer les informations sur l'image.";
    } else {
        $mime_type = $image_info["mime"];

        if ($mime_type !== "image/png" and $mime_type !== "image/jpeg" ) {
          
        } else {

            $sql = $connect->prepare("INSERT INTO produit_categorie_3 (id,name,image, price, quantity_max) VALUES (NULL, :name, :image_name, :prix,:max)");

            $sql->execute(array(
                ':name' => $name,
                ':image_name' => $image_name,
                ':prix' => $prix,
                ':max' => $max
      ));

      
      
      $destination = 'stripe/images/'.$_FILES['fichier']['name'];
      
      move_uploaded_file($origine,$destination);

      echo '<script>alert("Produit ajouté avec succès!");</script>';
        }
    }
    }else{
       echo '<script>alert("Seulement les fichiers PNG / JPEG sont acceptés");</script>';
    }

      

  }



  if ($categorie == 'musique_video_jeu' && $variable_stock !=0 && $variable_prix !=0) {

    $origine = $_FILES['fichier']['tmp_name'];

    $file_path = $origine;



    if($image_info = @getimagesize($file_path))
    {
      if ($image_info === false) {
        echo "Impossible de récupérer les informations sur l'image.";
    } else {
        $mime_type = $image_info["mime"];

        if ($mime_type !== "image/png" and $mime_type !== "image/jpeg" ) {

        } else {

            $sql = $connect->prepare("INSERT INTO produit_categorie_4 (id,name,image, price, quantity_max) VALUES (NULL, :name, :image_name, :prix,:max)");

            $sql->execute(array(
                ':name' => $name,
                ':image_name' => $image_name,
                ':prix' => $prix,
                ':max' => $max
      ));

      
      
      $destination = 'stripe/images/'.$_FILES['fichier']['name'];
      
      move_uploaded_file($origine,$destination);

      echo '<script>alert("Produit ajouté avec succès!");</script>';
        }
    }
    }else{
       echo '<script>alert("Seulement les fichiers PNG / JPEG sont acceptés");</script>';
    }

      

  }


  if ($categorie == 'livres_lectures' && $variable_stock !=0 && $variable_prix !=0) {

    $origine = $_FILES['fichier']['tmp_name'];

    $file_path = $origine;



    if($image_info = @getimagesize($file_path))
    {
      if ($image_info === false) {
        echo "Impossible de récupérer les informations sur l'image.";
    } else {
        $mime_type = $image_info["mime"];

        if ($mime_type !== "image/png" and $mime_type !== "image/jpeg" ) {
        } else {

            $sql = $connect->prepare("INSERT INTO produit_categorie_2 (id,name,image, price, quantity_max) VALUES (NULL, :name, :image_name, :prix,:max)");

            $sql->execute(array(
                ':name' => $name,
                ':image_name' => $image_name,
                ':prix' => $prix,
                ':max' => $max
            ));

            echo '<script>alert("Produit ajouté avec succès!");</script>';

      
      
      $destination = 'stripe/images/'.$_FILES['fichier']['name'];
      
      move_uploaded_file($origine,$destination);


        }
    }
    }else{
       echo '<script>alert("Seulement les fichiers PNG / JPEG sont acceptés");</script>';
    }

      

  }

  }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./Style/contact.css">
  <link rel="icon" href="./Images/DA/logo.png" type="image/png">
  <title>Vendez sur EKO</title>
</head>

<body>
  <?php
    include 'boutton_compte.php';
  ?>
  <!-- NAVBAR -->
  <div class="et-hero-tabs-container">
    <a class="et-hero-tab" href="https://www.baimmobilier.fr/eko/index.php">Accueil</a>
    <a class="et-hero-tab" href="https://www.baimmobilier.fr/eko/index.php#tab-es6">Acheter</a>
    <a class="et-hero-tab" href="./contact.php">Contact</a>
    <a class="et-hero-tab" href="./aboutus">A Propos</a>
  </div>
  <!-- Image avc le logo -->
  <div class="background">
    <div class="container">
      <div class="screen">
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
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span>VENDRE</span>
              <span>SUR EKO</span>
            </div>
            <div class="app-contact">En cas de problemes :<br><br>+33 07 ** ** ** **</div>
          </div>
          <div class="screen-body-item">
            <form method="post" enctype=multipart/form-data class="app-form">


              <!-- <label class="app-form-button" for="categorie">Choisissez la catégorie dans lequel votre produit sera mis:</label> -->

              <select class="app-form-button" class="app-form-group" name="categorie" id="categorie">
                <option name="try" value="">--Merci de choisir une Catégorie--</option>
                <option value="mods_beaute">Mods et beauté</option>
                <option value="pharmacie_soins_corps">Pharmacie et soins du corps</option>
                <option value="maison_bricolage">Maison et bricolage</option>
                <option value="musique_video_jeu">Musique, vidéo et jeux</option>
                <option value="livres_lectures">Livres et Lecture</option>
              </select>

              <div class="app-form-group">
                <!-- NOM -->
                <input class="app-form-control" type="text" name="name" placeholder="Nom du produit" required>
              </div>
              <div class="app-form-group">
                <!-- EMAIL -->
                <input class="app-form-control" type="number" name="prix" placeholder="Prix" required>
              </div>
              <div class="app-form-group">
                <!-- TEL -->
                <input class="app-form-control" type="number" name="max" placeholder="Stock Maximum" required>
              </div>
              <div class="app-form-group message">
                <!-- MESSAGE -->
                <input class="app-form-control" for="file" type="file" name="fichier" required>
              </div>
              <div class="app-form-group buttons">
              <?php
              	session_start();
                require("./connection/database.php");
                
                if(isset($_SESSION["user"])){
                  echo '<a><input type="submit" class="app-form-button" name="publication" value="Envoyer"></input></a>';
                }else{
                  echo '<a href="./connection/login_account.php" class="app-form-button">Veuillez vous connecter</a>';
                }
              ?>
              </div>
            </form>
            <a style="display:flex; justify-content:flex-end; text-decoration:none; margin-top:10px"
              href="/Projet/homepage.php"><button class="app-form-button">Accueil</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

