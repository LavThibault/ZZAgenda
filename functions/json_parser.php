<?php

  function get_conferences(){
    $all_c_parsed = read(__ROOT__."/database/conf.json");

    $all_c = json_decode($all_c_parsed);

    $c_array = array();

    $i = 0;

    if($all_c != NULL){
      foreach ($all_c as $oldkey => $c) {
        $nb = str_pad($i, 3, '0', STR_PAD_LEFT);
        $newkey = substr($c->date, 6, 4).substr($c->date, 3, 2).substr($c->date, 0, 2).substr($c->heure, 0, 2).substr($c->heure, 3, 2).$nb;
        $i = $i +1;

        $c_array[$newkey]=$c;

      }
    }

    return $c_array;
  }

  function set_conference($c_array){
    ksort($c_array);

    $c_array_parsed = json_encode($c_array);

    write(__ROOT__."/database/conf.json",$c_array_parsed);
  }

?>
