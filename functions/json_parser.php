<?php
   class Conf {
      public $titre = "";
      public $intervenant  = "";
      public $description = "";
      public $date = "";
      public $heure = "";
      public $lieu = "";
   }

  function saveConf (){
    $all_c_parsed = read(__ROOT__."/database/conf.json");

    $all_c = json_decode($all_c_parsed);

    $c_array = array();
    $i=0;

    if($all_c != NULL){
      foreach ($all_c as $key => $c) {
        $newkey = $key;
        $newkey[strlen($key)-1] = $i;
        $i = $i+1;
        $c_array[$newkey]=$c;
      }
    }

    extract($_POST);

    $c = new Conf();
    $c->titre = $titre;
    $c->intervenant  = $interv;
    $c->description = $desc;
    $c->date = $date;
    $c->heure = $heures.":".$minutes;
    $c->lieu = $lieu;
    $key = substr($date, 6, 4).substr($date, 3, 2).substr($date, 0, 2).$heures.$minutes.$i;

    $c_array[$key]=$c;

    ksort($c_array);

    $c_array_parsed = json_encode($c_array);

    write(__ROOT__."/database/conf.json",$c_array_parsed);
  }

  function printConf(){
    $all_c_parsed = read(__ROOT__."/database/conf.json");

    $all_c = json_decode($all_c_parsed);

    if($all_c != NULL){
      foreach ($all_c as $key => $c) {


        echo "<div class=\"container\">
          <div class=\"row\">
            <div>
              <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
            </div>
            <div >
              <p>";
              echo $c->heure;
              echo "</p>
            </div>
            <div class=\"col-5 border-left\">
              <h5>";
              echo $c->titre;
              echo"</h5>
              <p>";
              echo $c->description;
              echo"</p>
              <div class=\"row ml-1\">
                <div>
                  <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                </div>
                <div >
                  <p>";
                  echo $c->lieu;
                  echo "</p>
                </div>
              </div>

              <div class=\"row ml-1\">
                <div>
                  <i class=\"fa fa-microphone\" aria-hidden=\"true\"></i>
                </div>
                <div >
                  <p>";
                  echo $c->intervenant;
                  echo "</p>
                </div>
              </div>
            </div>
          </div>
        </div>";

      }
    }


  }
?>
