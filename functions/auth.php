<?php

function authentification(){
    if (isset($_POST['username']) && isset($_POST['password']) && ($filep = fopen(__ROOT__."/database/password.csv", "r")) !== FALSE) {
        $connexion = false;
        $i = 1;
        $userDataBase = get_users();
        while (!$connexion && $i < count($userDataBase)) {
          if($userDataBase[$i][0] == $_POST['username'] && $userDataBase[$i][1] == hash('sha256', $_POST['password'])){
            $connexion = true;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['level'] = $userDataBase[$i][2];
            header('Location: conferences');
          }
          $i++;
        }
        fclose($filep);
        if(!$connexion){
          echo "Utilisateur ou mot de passe introuvable.";
        }
    }
  }

  function chiffrementDatabase(){
    $filep = fopen(__ROOT__."/database/password.csv", "r+");
    $lectureFichier = get_users();
    for($i = 0; $i < count($lectureFichier); $i++){
      if($i != 0 && $lectureFichier[$i][3] == 0){
        $lectureFichier[$i][1] = hash('sha256', $lectureFichier[$i][1]);
        $lectureFichier[$i][3] = 1;
      }
    }
    set_users($lectureFichier);
    fclose($filep);
  }

 ?>
