<?php
  use PHPUnit\Framework\TestCase;

  class Test extends TestCase {

    public function setUp(){
        echo "=================================================================== DEBUT DES TESTS";
        define('__ROOT__', dirname(dirname(__FILE__)));
        $file = "/database/conf_unit_test.json";
        require_once(__ROOT__.'/functions/file.php');
        require_once(__ROOT__.'/functions/json_parser.php');
        require_once(__ROOT__.'/functions/conf_manager.php');
        require_once(__ROOT__.'/functions/functions.php');
        require_once(__ROOT__.'/functions/auth.php');
        require_once(__ROOT__.'/functions/csv_parser.php');
        $_POST['titre']="Internet Of Things";
        $_POST['interv']="Paul Pinault";
        $_POST['desc']="Introduction à la notion d'IOT et à ses problématiques";
        $_POST['lieu']="Clermont-Ferrand";
        $_POST['date']="17/04/2018";
        $_POST['heures']="13";
        $_POST['minutes']="30";

    }

    public function test_inserer_une_conference(){
      $key = "201804171330000";

      add_conference();

      $c_array = get_conferences();

      $c = get_conference($key);

      $this -> assertEquals($c->titre, 'Internet Of Things');

      echo $c->titre;

      foreach ($c_array as $key => $c) {
        delete_conference($key);
      }
    }

    public function tearDown(){
      echo "=================================================================== FIN DES TESTS ";
    }

  }
 ?>
