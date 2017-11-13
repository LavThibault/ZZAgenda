<?php

function authentification(){
    $connexion = false;
    if (isset($_POST['username']) && isset($_POST['password']) && ($filep = fopen(__ROOT__."/database/password.csv", "r")) !== FALSE) {
      while (!$connexion && ($user = fgetcsv($filep, 1000, ";")) !== FALSE) {
        if($user[0] == $_POST['username'] && $user[1] == $_POST['password']){
          $connexion = true;
          $_SESSION['username'] = $_POST['username'];
          $_SESSION['password'] = $_POST['password'];
          $_SESSION['level'] = $user[2];
          echo "Connexion réussie.";
          //header('Location: index.php');
        }
      }
      fclose($filep);
      if(!$connexion){
        echo "Utilisateur ou mot de passe introuvable.";
      }
    }
  }
 ?>
