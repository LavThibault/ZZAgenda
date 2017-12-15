<?php
   class Conference {
      public $titre = "";
      public $intervenant  = "";
      public $description = "";
      public $date = "";
      public $heure = "";
      public $lieu = "";
   }

   function add_conference(){

     $c_array = get_conferences();

     $nb_c = count($c_array);
     $nb_c = str_pad($nb_c, 3, '0', STR_PAD_LEFT);

     $c = create_new_conference();

     extract($_POST);
     $key = substr($date, 6, 4).substr($date, 3, 2).substr($date, 0, 2).$heures.$minutes.$nb_c;

     $c_array[$key]=$c;

     set_conference($c_array);
   }

   function get_conference($key){

     $c_array = get_conferences();

     return $c_array[$key];
   }

   function update_conference($oldkey){

     $c = create_new_conference();

     $c_array=get_conferences();

     $nb_c = count($c_array);
     $nb_c = str_pad($nb_c, 3, '0', STR_PAD_LEFT);

     extract($_POST);
     $newkey = substr($date, 6, 4).substr($date, 3, 2).substr($date, 0, 2).$heures.$minutes.$nb_c;

     unset($c_array[$oldkey]);

     $c_array[$newkey]=$c;

     set_conference($c_array);
   }

   function delete_conference($key){

      $c_array=get_conferences();

      unset($c_array[$key]);

      set_conference($c_array);
   }

   function print_all_conference(){

     $c_array = get_conferences();
     $date="";

       foreach ($c_array as $key => $c) {
         $date=print_conference($c,$date);
       }

   }

   function print_all_conference_admin($url){

     $c_array = get_conferences();

     foreach ($c_array as $key => $c) {
       print_conference_admin($c, $key,$url);
     }

   }

   function print_conference($c,$previous_date){

     if($previous_date == NULL || $previous_date != $c->date){
       echo "<div class=\"container\">
         <div class=\"row\">
           <div>
             <i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i>
           </div>
           <div >
             <p>";
             echo $c->date;
             echo "</p>
           </div>
         </div>
       </div>";
     }

     $previous_date=$c->date;

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

     return $previous_date;
   }

   function print_conference_admin($c, $key, $url){
     echo"<tr>
            <td>";
              echo $c->titre;
       echo"</td>
            <td>";
              echo $c->intervenant;
       echo"</td>
            <td>";
              echo $c->date;
       echo"</td>
       <td>";
              echo $c->lieu;
       echo"</td>
       <td>
          <div class=\"row\">
            <div class=\"col-4\">
              <i class=\"fa fa-pencil\" aria-hidden=\"true\" onclick=\"load_page('"; echo $url."/index.php?lang=".$_GET['lang']."&page=modifierConf&conf=".$key; echo"')\" style=\"cursor:pointer;\"></i>
            </div>
            <div class=\"col-4\">
              <i id=\"deleteConf\" class=\"fa fa-times\" aria-hidden=\"true\" onclick=\"load_page('"; echo $url."/index.php?lang=".$_GET['lang']."&page=suppression&conf=".$key; echo"')\" style=\"cursor:pointer;\"></i>
            </div>
          </div>
        </td>
     </tr>";
   }

   function create_new_conference(){
     extract($_POST);
     $c = new Conference();
     $c->titre = $titre;
     $c->intervenant  = $interv;
     $c->description = $desc;
     $c->date = $date;
     $c->heure = $heures.":".$minutes;
     $c->lieu = $lieu;
     return $c;
   }
