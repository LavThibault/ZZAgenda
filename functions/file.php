<?php

function read ($file_name) {
  $file    = fopen( $file_name, "r" );
  $content = "";
  while(!feof($file)) {
    $content .= fgets($file, 4096);
  }
  fclose($file);
  return $content;
}

function write ($file_name, $values) {
  $file = fopen($file_name, "a");
  fwrite($file,$values);
  fclose($file);
}


 ?>
