<?php
  use PHPUnit\Framework\TestCase;

  class Test extends TestCase {

    public function setUp(){
        require_once('../functions/conf_manager.php');
    }

    public function test1(){
      $a=1;
      $b=2;

      $c=$a+$b;

      $this -> assertTrue($c == 3, "1+1=2");
    }

    public function tearDown(){
      echo "after test";
    }

  }
 ?>
