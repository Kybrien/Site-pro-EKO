<?php
	  session_start();
	  require("./connection/database.php");
	
	  if(isset($_SESSION["user"])){
        echo '<div id="sticky-button"><a href="https://www.baimmobilier.fr/eko/connection/home.php">MON COMPTE</a></div>';
	  }else{
        echo '<div id="sticky-button"><a href="https://www.baimmobilier.fr/eko/connection/login_account.php">SE CONNECTER</a></div>';
    }
  ?>