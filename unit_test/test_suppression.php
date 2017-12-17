<?php
  use PHPUnit\Framework\TestCase;

  class Test extends TestCase {

    public function setUp(){
        echo "=================================================================== DEBUT DES TESTS";
        define('__ROOT__', dirname(dirname(__FILE__)));
        require_once(__ROOT__.'/functions/file.php');
        require_once(__ROOT__.'/functions/json_parser.php');
        require_once(__ROOT__.'/functions/conf_manager.php');
        require_once(__ROOT__.'/functions/auth.php');
        require_once(__ROOT__.'/functions/csv_parser.php');
    }

public function test_supprimer_une_conference(){
  $c_array = get_conferences();

  $nb_c_before = count($c_array);

  delete_conference(key($c_array));

  $c_array = get_conferences();

  $nb_c_after = count($c_array);

  $this -> assertEquals($nb_c_before - 1, $nb_c_after);

}


    public function tearDown(){
      echo "=================================================================== FIN DES TESTS ";
    }

  }
 ?>
