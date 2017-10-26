<?php
   class Conf {
      public $titre = "";
      public $intervenant  = "";
      public $description = "";
   }

  function saveConf (){
    $all_c_parsed = read(__ROOT__."/database/conf.json");

    $all_c = json_decode($all_c_parsed);

    echo var_dump($all_c);

    $c_array = array();

    if($all_c != NULL){
      foreach ($all_c as $kay => $c) {
        array_push($c_array,$c);
        /*$newkey = $c->$titre;
        $c_array[$newkey]=$c;*/
      }
    }

    extract($_POST);

    $c = new Conf();
    $c->titre = $titre;
    $c->intervenant  = $interv;
    $c->description = $desc;

    array_push($c_array,$c);

    $c_array_parsed = json_encode($c_array);

    write(__ROOT__."/database/conf.json",$c_array_parsed);
  }
?>
