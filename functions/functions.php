<?php

function get_page($p,$l){
  if($l == 'fr'){
    $array = array('admin' => 'administrateur', 'ajoutConf' => 'ajouter_conference', 'connexion' => 'connexion', 'modifierConf' => 'modifier_conference');
  }

  if($l == 'en'){
    $array = array('admin' => 'administrator', 'ajoutConf' => 'add_conference', 'connexion' => 'connection', 'modifierConf' => 'modify_conference');
  }

  return $array[$p];
}

?>
