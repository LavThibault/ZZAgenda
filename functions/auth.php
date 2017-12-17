<?php

/* Function which check if a user is in the database password.csv */
function authentification(){
    global $url;
    sanitize();
    if (isset($_POST['username']) && isset($_POST['password']) && ($filep = fopen(__ROOT__."/database/password.csv", "r")) !== FALSE) {
        $connexion = false;
        $i = 1;
        $userDataBase = get_users(); // get all the users of the database
        while (!$connexion && $i < count($userDataBase)) {
          if($userDataBase[$i][0] == $_POST['username'] && $userDataBase[$i][1] == hash('sha256', $_POST['password'])){ // compare username and password
            $connexion = true;
            $_SESSION['username'] = $_POST['username']; // set session variable with username and the level of the user
            $_SESSION['level'] = $userDataBase[$i][2];
            header("Location: $url/index.php?lang=fr&page=conferences"); // relocation to the page conferences if user connected
          }
          $i++;
        }
        setcookie('user', $_SESSION['username'], time()+86400); // 24h cookie to remember the username
        fclose($filep);
        if(!$connexion){
          echo "Utilisateur ou mot de passe introuvable.";
        }
    }
  }

  /* Function which avoids scripts in login forms */
  function sanitize(){
    $_POST['username'] = htmlentities($_POST['username']);
    $_POST['password'] = htmlentities($_POST['password']);
  }

  /* Function which hashes the passwords in the database for the new passwords */
  function chiffrementDatabase(){
    $filep = fopen(__ROOT__."/database/password.csv", "r+");
    $lectureFichier = get_users();
    for($i = 0; $i < count($lectureFichier); $i++){
      if($i != 0 && $lectureFichier[$i][3] == 0){
        $lectureFichier[$i][1] = hash('sha256', $lectureFichier[$i][1]);
        $lectureFichier[$i][3] = 1; // the password is now hashed
      }
    }
    set_users($lectureFichier); // save the database in the file
    fclose($filep);
  }

 ?>
