<?php

  function get_conference(){
    $all_c_parsed = read(__ROOT__."/database/conf.json");

    $all_c = json_decode($all_c_parsed);

    $c_array = array();
    $i=0;

    if($all_c != NULL){
      foreach ($all_c as $key => $c) {

        $c_array[$key]=$c;

      }
    }

    return $c_array;
  }

  function set_conference($c_array){
    $c_array_parsed = json_encode($c_array);

    write(__ROOT__."/database/conf.json",$c_array_parsed);
  }

?>
