  <?php

  require_once('functions/conf_manager.php');

  require_once('C:\xampp2\php\pear\PHPUnit\Autoload.php');

  class monTest extends PHPunit_Framework_Testcase {

    public function setUp(){
      echo "I run before each test";
    }

    public function testFonction(){
      include('functions/conf_manager.php');
      $result = ca_marche(5);
      $this->assertEquals(7,$result);
      echo "tralala";
    }

    public function tearDown(){
      echo "I run after each test";
    }
  }

  ?>
