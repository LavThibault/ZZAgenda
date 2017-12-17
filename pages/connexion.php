
    <!-- Connexion page -->

    <div class="container">
      <div class="row justify-content-center">
        <form class="form-horizontal col-5" method="post">
          <fieldset>
          <!-- Form Name -->
          <legend><?php echo $CONNEXION ?></legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-12 control-label"><?php echo $NOM ?></label>
            <div class="col-12">

            <input name="username" type="text" class="form-control input" value="<?php if(isset($_COOKIE["user"])) echo $_COOKIE["user"]?>" required>

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-12 control-label"><?php echo $MOT_DE_PASSE ?></label>
            <div class="col-12">
              <input name="password" type="password" class="form-control input" required>

            </div>
          </div>


          <!-- Button (Double) -->
          <div class="form-group">
            <div class="col-md-8">
              <button id="submit" name="submit" class="btn btn-primary" type=submit><?php echo $CONNEXION ?></button>
            </div>
          </div>

          <?php
              if(isset($_POST['submit'])){
                authentification();
              }
           ?>


          </fieldset>
        </form>
      </div>
    </div>


    <!-- /Connexion page -->
