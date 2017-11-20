<header>
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-3">
        <h1>ZZAgenda</h1>
      </div>

<?php $page ?>
      <div>
        <?php
          if(isset($_SESSION['username'])){
            echo "<p>Connecté(e) en tant que : ".$_SESSION['username']."</p>";
          }
         ?>
      </div>

      <div>
        <select id="language" name="language" class="form-control" onChange="window.location.href=this.value">
          <option value="<?php echo $url ?>/fr"><?php echo $FRANCAIS ?></option>
          <option value="<?php echo $url ?>/en"><?php echo $ANGLAIS ?></option>
        </select>
      </div>

    </div>
  </div>
</header>
