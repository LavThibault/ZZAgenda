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
        require_once(__ROOT__.'/functions/user_manager.php');

    }

    public function test_chiffrement_data_base(){

      $array = get_users();
      chiffrementDatabase();
      $this -> assertEquals($array[1][2], hash('sha256','admin'));
    }

    public function tearDown(){
      echo "=================================================================== FIN DES TESTS ";
    }

  }
 ?>
