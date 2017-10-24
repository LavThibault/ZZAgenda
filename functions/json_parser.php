<?php
   class Conf {
      public $titre = "";
      public $intervenant  = "";
      public $description = "";
      public $date_ajout = "";
   }

   $c = new Conf();
   $c->titre = "Pourquoi hacher un mot de passe n'est pas vegan ?";
   $c->intervenant  = "Jacques Carniste";
   $c->date_ajout = "10/12/2017";
   $c->description = "blablbla";

   $c_parsed = json_encode($c);

   var_dump(json_decode($c_parsed));
?>
