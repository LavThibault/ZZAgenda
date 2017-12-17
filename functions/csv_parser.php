<?php

  /* Function which gets all the users in the database and return them in an Array */
  function get_users(){
    $fichier = fopen(__ROOT__.'/database/password.csv', 'r');
    $userList = array();
    while(($user = fgetcsv($fichier, 1000, ";")) !== FALSE){
      array_push($userList, $user);
    }
    return $userList;
  }
  
  /* Function which saves all the users in the database */
  function set_users($array){
    $csv_parsed = "";
    foreach($array as $l){
      $chaine = $l[0].';';
      $chaine .= $l[1].';';
      $chaine .= $l[2].';';
      $chaine .= $l[3]."\n";
      $csv_parsed .= $chaine;
    }
    write(__ROOT__.'/database/password.csv', $csv_parsed);
  }

 ?>
