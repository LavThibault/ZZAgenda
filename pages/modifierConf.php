<?php
<<<<<<< HEAD
  if($level < 2){
    header("Location: /ZZAgenda/index.php");
    exit();
  }
 ?>

<?php
=======
if (empty($_GET['page'])) {
   header( "Location: $url" );
   exit();
 }
>>>>>>> styleSketchy

 extract($_GET);

 $c = get_conference($conf);
?>

    <div class="container">
      <div class="row" id="pageTitle">
<<<<<<< HEAD
        <a type="button" class="btn btn-primary col-1 mb-3 mt-3" href="<?php echo $url.'/'.$lang.'/'.$LIENADMIN ?>"><?php echo $RETOUR ?></a>
=======
        <a type="button" class="btn btn-primary col-1 mb-3 mt-3" href="<?php echo $url ?>/index.php?lang=<?php echo $lang ?>&page=admin"><?php echo $RETOUR ?></a>
>>>>>>> styleSketchy

      </div>
    </div>

    <div class="container">

  	     <form class="form-horizontal" method="post">
           <fieldset>

             <!-- Form Name -->
             <legend><center><?php echo $MODIFIER_UNE_CONFERENCE ?></center></legend>

             <!-- Text input-->
             <div class="form-group">
               <label class="col-md-4 control-label" for="requestid"><?php echo $TITRE ?></label>
               <div class="col-md-4">
                 <input id="titre" name="titre" class="form-control input-md" required type="text" value="<?php echo $c->titre ?>">
               </div>
             </div>

             <!-- Text input-->
             <div class="form-group">
               <label class="col-md-4 control-label" for="requestid"><?php echo $INTERVENANT ?></label>
               <div class="col-md-4">
                 <input id="interv" name="interv" class="form-control input-md" required type="text" value="<?php echo $c->intervenant ?>">
               </div>
             </div>

              <!-- Textarea -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="submit"><?php echo $DESCRIPTION ?></label>
                <div class="col-md-4">
                  <textarea class="form-control" id="desc" name="desc" required><?php echo $c->description ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="requestid"><?php echo $LIEU ?></label>
                <div class="col-md-4">
                  <input id="lieu" name="lieu" class="form-control input-md" required type="text" value="<?php echo $c->lieu ?>">
                </div>
              </div>

              <!--Date picker-->
              <!-- documentation : http://api.jqueryui.com/datepicker/#theming -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="submit"><?php echo $SELECTIONNER_UNE_DATE ?></label>
                  <div class="col-md-4">
                    <input id="date" type="text" name="date" required value="<?php echo $c->date ?>"></input>
                  </div>
              </div>

              <!-- Textarea -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="dis"><?php echo $HEURE ?></label>
                <div class="col-md-4 row">
                  <select id="heures" name="heures" class="form-control col-md-3">
                    <option value="00">00</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                  </select>

                  <select id="minutes" name="minutes" class="form-control col-md-3">
                    <option value="00">00</option>
                    <option value="05">05</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                    <option value="35">35</option>
                    <option value="40">40</option>
                    <option value="45">45</option>
                    <option value="50">50</option>
                    <option value="55">55</option>
                  </select>
                </div>
              </div>


              <!-- Button -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label><center>
                <div class="col-md-4">
                  <button id="submit" name="submit" type="submit" class="btn btn-primary"><?php echo $MODIFIER ?></button>
                </div></center>
              </div>

            </fieldset>
          </form>
            </div>
          <?php

          if(isset($_POST['submit'])){
            if(checkdate(substr($_POST['date'], 3, 2),substr($_POST['date'], 0, 2),substr($_POST['date'], 6, 4))){

              update_conference($conf);

            } else {
              ?>

              <script>alert("Entrer une date valide");</script>

              <?php
            }
          }

          ?>

       </div>

    <script>
      $(function() {
          $( "#date" ).datepicker($.datepicker.regional["fr"]);
        });
</script>
