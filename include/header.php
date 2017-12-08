<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-light">

      <div>
        <?php
          if(isset($_SESSION['username'])){
            echo "<p>Connecté(e) en tant que : ".$_SESSION['username']."</p>";
          }
         ?>
      </div>

      <a class="navbar-brand" href="<?php echo $url ?>/index.php?lang=<?php echo $lang ?>">ZZAgenda</a>


<!--    <form class="form-inline my-2 my-lg-0">
      <select id="language" name="language" class="form-control mr-sm-2" onChange="window.location.href=this.value">
        <option value="<?php echo $url ?>/fr"><?php echo $FRANCAIS ?></option>
        <option value="<?php echo $url ?>/en"><?php echo $ANGLAIS ?></option>
      </select>
    </form>-->

    <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto"></ul>
    <form class="form-inline my-2 my-lg-0">
          <select id="language" name="language" class="form-control mr-sm-2" onChange="window.location.href=this.value">
            <?php
                if($lang == "en"){
            ?>
              <option value="<?php echo $url ?>/index.php?lang=en"><?php echo $ANGLAIS ?></option>
              <option value="<?php echo $url ?>/index.php?lang=fr"><?php echo $FRANCAIS ?></option>
            <?php
                } else {
            ?>
              <option value="<?php echo $url ?>/index.php?lang=fr"><?php echo $FRANCAIS ?></option>
              <option value="<?php echo $url ?>/index.php?lang=en"><?php echo $ANGLAIS ?></option>
            <?php
                }
            ?>
          </select>
        </form>
  </div>



</nav>
</header>
