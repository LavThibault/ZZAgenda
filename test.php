<?php
  require_once('functions/conf_manager.php');

  class Test extends PHPUnit_Framework_TestCase {

    public function setUp(){
        echo "before test";
    }

    public function test1(){
      $a=1;
      $b=2;

      $c=$a+$b;

      $this -> assertTrue($c == 2, "1+1=2");
    }

    public function tearDown(){
      echo "after test";
    }

  }
 ?>
