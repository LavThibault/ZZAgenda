<?php
if (empty($_GET['page'])) {
   header( "Location: http://localhost/www/ZZAgenda/en" );
   exit();
 }
?>
    <!-- Connexion page -->

    <div class="container">
      <div class="row justify-content-center">
        <form class="form-horizontal col-5" action="connexion.php" method="post">
          <fieldset>

          <!-- Form Name -->
          <legend>Sign in</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-12 control-label" for="">Login</label>
            <div class="col-12">
            <input id="" name="username" type="text" placeholder="" class="form-control input">

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-12 control-label" for="">Password</label>
            <div class="col-12">
              <input id="" name="password" type="password" placeholder="" class="form-control input">

            </div>
          </div>

          <!-- Button (Double) -->
          <div class="form-group">
            <div class="col-md-8">
              <button id="" name="" class="btn btn-primary" type="submit">Login</button>
              <button id="" name="" class="btn btn-secondary">Annuler</button>
            </div>
          </div>

          <?php
            authentification();
           ?>

          </fieldset>
        </form>
      </div>
    </div>


    <!-- /Connexion page -->
