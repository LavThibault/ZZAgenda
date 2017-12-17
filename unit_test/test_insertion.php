<?php
  use PHPUnit\Framework\TestCase;

  class Test extends TestCase {

    public function setUp(){
        echo "=================================================================== DEBUT DES TESTS";
        define('__ROOT__', dirname(dirname(__FILE__)));
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
        $file = "/database/conf_unit_test.json";

    }

    public function test_inserer_une_conference(){
      $c_array = get_conferences();

      $nb_c_before = count($c_array);

      add_conference();

      $c_array = get_conferences();

      $nb_c_after = count($c_array);

      $this -> assertEquals($nb_c_before + 1, $nb_c_after);

    }

    public function tearDown(){
      echo "=================================================================== FIN DES TESTS ";
    }

  }
 ?>
