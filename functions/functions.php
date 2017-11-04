<?php

function get_other_language_page($p,$current_l,$wanted_l){
  if($current_l == 'fr' && $wanted_l == 'en'){
    $array = array('ajouter_conference' => 'add_conference', 'administrateur' => 'administrator', 'connexion' => 'connection');
  }

  if($current_l == 'en' && $wanted_l == 'fr'){
    $array = array('add_conference' => 'ajouter_conference', 'administrator' => 'administrateur', 'connection' => 'connexion');
  }

  return $array[$p];
}

?>
