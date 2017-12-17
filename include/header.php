<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-light">

      <div>
        <?php
          /* displays the username in top of the header */
          if(isset($_SESSION['username'])){
            echo "<p>Connecté(e) en tant que : ".$_SESSION['username']."</p>";
          }
         ?>
      </div>

      <a class="navbar-brand" href="<?php echo $url ?>/index.php?lang=<?php echo $lang ?>">ZZAgenda</a>

    <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto"></ul>
    <form class="form-inline my-2 my-lg-0">
          <select id="language" name="language" class="form-control mr-sm-2" onChange="window.location.href=this.value">
            <?php
            /* Show the active language first */
                if($lang == "en"){
            ?>
              <option value="<?php echo $url ?>/index.php?lang=en<?php if(isset($page)){ echo "&page=".$page;} if(isset($conf)){ echo "&conf=".$conf;} ?>"><?php echo $ANGLAIS ?></option>
              <option value="<?php echo $url ?>/index.php?lang=fr<?php if(isset($page)){ echo "&page=".$page;} if(isset($conf)){ echo "&conf=".$conf;} ?>"><?php echo $FRANCAIS ?></option>
            <?php
                } else {
            ?>
              <option value="<?php echo $url ?>/index.php?lang=fr<?php if(isset($page)){ echo "&page=".$page;} if(isset($conf)){ echo "&conf=".$conf;} ?>"><?php echo $FRANCAIS ?></option>
              <option value="<?php echo $url ?>/index.php?lang=en<?php if(isset($page)){ echo "&page=".$page;} if(isset($conf)){ echo "&conf=".$conf;} ?>"><?php echo $ANGLAIS ?></option>
            <?php
                }
            ?>
          </select>
        </form>
  </div>



</nav>
</header>
