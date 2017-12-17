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

    public function test_conversion_nombre_groupe(){
      $this -> assertEquals(numberToGroup(1),'user');
      $this -> assertEquals(numberToGroup(2),'admin');
      $this -> assertEquals(numberToGroup(-300),'visitor');
      $this -> assertEquals(groupToNumber('user'),1);
      $this -> assertEquals(groupToNumber('admin'),2);
      $this -> assertEquals(groupToNumber('visiazeazerr'),0);
    }

    public function tearDown(){
      echo "=================================================================== FIN DES TESTS ";
    }

  }
 ?>
