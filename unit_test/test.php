<?php
  use PHPUnit\Framework\TestCase;

  class Test extends TestCase {

    public function setUp(){
        echo "=================================================================== DEBUT DES TESTS";
        $file = "/database/conf_unit_test.json";
        require_once('../functions/conf_manager.php');
        $_POST['titre']="Internet Of Things";
        $_POST['interv']="Paul Pinault";
        $_POST['desc']="Introduction à la notion d'IOT et à ses problématiques";
        $_POST['lieu']="Clermont-Ferrand";
        $_POST['date']="17/04/2018";
        $_POST['heures']="13";
        $_POST['minutes']="30";
    }

    public function test_inserer_une_conference(){
      add_conference();

      $c_array = get_conferences();

      $nb_c = count($c_array);

      $this -> assertTrue($nb_c == 1, "Il n'y a qu'une conférence dans le fichier");

      foreach ($c_array as $key => $c) {
        delete_conference($key);
      }
    }

    public function tearDown(){
      echo "=================================================================== FIN DES TESTS ";
    }

  }
 ?>
