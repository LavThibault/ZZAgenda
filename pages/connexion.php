<?php
if (empty($_GET['page'])) {
   header("HTTP/1.0 400 Bad Request", true, 400);
   exit('400: Bad Request');
 }
?>
    <!-- Connexion page -->

    <div class="container">
      <div class="row justify-content-center">
        <form class="form-horizontal col-5">
          <fieldset>

          <!-- Form Name -->
          <legend>Sign in</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-12 control-label" for="">Login</label>
            <div class="col-12">
            <input id="" name="" type="text" placeholder="" class="form-control input">

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-12 control-label" for="">Mot de passe</label>
            <div class="col-12">
              <input id="" name="" type="password" placeholder="" class="form-control input">

            </div>
          </div>

          <!-- Button (Double) -->
          <div class="form-group">
            <div class="col-md-8">
              <button id="" name="" class="btn btn-primary">Login</button>
              <button id="" name="" class="btn btn-secondary">Annuler</button>
            </div>
          </div>

          </fieldset>
        </form>
      </div>
    </div>


    <!-- /Connexion page -->
