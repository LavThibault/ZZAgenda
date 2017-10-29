<?php
   class Conf {
      public $titre = "";
      public $intervenant  = "";
      public $description = "";
      public $date = "";
   }

  function saveConf (){
    $all_c_parsed = read(__ROOT__."/database/conf.json");

    $all_c = json_decode($all_c_parsed);

    echo var_dump($all_c);

    $c_array = array();
    $i=0;

    if($all_c != NULL){
      foreach ($all_c as $key => $c) {
        $newkey = $key;
        $newkey[strlen($key)-1] = $i;
        $i = $i+1;
        $c_array[$newkey]=$c;
      }
    }

    extract($_POST);

    $c = new Conf();
    $c->titre = $titre;
    $c->intervenant  = $interv;
    $c->description = $desc;
    $c->date = $date;
    $key = substr($date, 6, 4).substr($date, 0, 2).substr($date, 3, 2).$i;

    //array_push($c_array,$c);
    $c_array[$key]=$c;

    $c_array_parsed = json_encode($c_array);

    write(__ROOT__."/database/conf.json",$c_array_parsed);
  }
?>
