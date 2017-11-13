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
          <legend>Connexion</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-12 control-label" for="">Nom</label>
            <div class="col-12">
            <input id="" name="username" type="text" placeholder="" class="form-control input">

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-12 control-label" for="">Mot de passe</label>
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
              <button id="" name="" class="btn btn-primary" type=submit>Se connecter</button>
              <button id="" name="" class="btn btn-secondary">Annuler</button>
            </div>
          </div>

          </fieldset>
        </form>
      </div>
    </div>


    <!-- /Connexion page -->
