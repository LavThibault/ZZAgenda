<?php

/* Read and return all file content */
function read ($file_name) {
  $file    = fopen( $file_name, "r" );
  $content = "";
  while(!feof($file)) {
    $content .= fgets($file, 4096);
  }
  fclose($file);
  return $content;
}

/* Write content in a file */
function write ($file_name, $values) {
  $file = fopen($file_name, "w");
  fwrite($file,$values);
  fclose($file);
}


 ?>
