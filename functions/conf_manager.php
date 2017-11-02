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
     $c_array = get_conference();

     $nb_c = count($c_array);
     $nb_c = str_pad($nb_c, 3, '0', STR_PAD_LEFT);

     $c = create_new_conference();

     extract($_POST);
     $key = substr($date, 6, 4).substr($date, 3, 2).substr($date, 0, 2).$heures.$minutes.$nb_c;

     $c_array[$key]=$c;

     ksort($c_array);

     set_conference($c_array);
   }

   function print_all_conference(){
     $c_array = get_conference();
     $date="";

       foreach ($c_array as $key => $c) {
         $date=print_conference($c,$date);
       }

   }

   function print_all_conference_admin(){
     $c_array = get_conference();

     foreach ($c_array as $key => $c) {
       print_conference_admin($c, $key);
     }

   }

   function print_conference($c,$previous_date){

     if($previous_date != $c->date){
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

   function print_conference_admin($c, $key){
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
              <i class=\"fa fa-pencil\" aria-hidden=\"true\" onclick=\"modify_conference()\" style=\"cursor:pointer;\"></i>
            </div>
            <div class=\"col-4\">
              <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
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
