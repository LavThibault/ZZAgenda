<?php
if (empty($_GET['page'])) {
   header( "Location: $url" );
   exit();
 }
?>
    <!-- Connexion page -->

    <div class="container">
      <div class="row justify-content-center">
        <form class="form-horizontal col-5" method="post">
          <fieldset>
          <!-- Form Name -->
          <legend><?php echo $CONNEXION ?></legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-12 control-label" for=""><?php echo $NOM ?></label>
            <div class="col-12">
            <input id="" name="username" type="text" placeholder="" class="form-control input">

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-12 control-label" for=""><?php echo $MOT_DE_PASSE ?></label>
            <div class="col-12">
              <input id="" name="password" type="password" placeholder="" class="form-control input">

            </div>
          </div>

          <?php
            authentification();
           ?>

          <!-- Button (Double) -->
          <div class="form-group">
            <div class="col-md-8">
              <button id="" name="" class="btn btn-primary" type=submit><?php echo $CONNEXION ?></button>
              <button id="" name="" class="btn btn-secondary"><?php echo $ANNULER ?></button>
            </div>
          </div>

          </fieldset>
        </form>
      </div>
    </div>


    <!-- /Connexion page -->
