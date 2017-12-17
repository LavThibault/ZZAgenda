<?php
  if($level < 2){
    header("Location: /ZZAgenda/index.php");
    exit();
  }
 ?>

    <!--Page title-->
    <div class="container mb-3 mt-3 ">
      <div class="row justify-content-around" id="pageTitle">

        <div class="text-center col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <h2><?php echo $ADMINISTRATION ?></h2>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <a type="button" class="btn btn-primary col-12" href="<?php echo $url ?>/index.php?lang=<?php echo $lang ?>&page=ajoutConf"><?php echo $AJOUTER_UNE_CONFERENCE ?></a>
          <a type="button" class="btn btn-primary col-12" href="<?php echo $url ?>/index.php?lang=<?php echo $lang ?>&page=adminUser"><?php echo $GESTION_USER ?></a>
        </div>

      </div>
    </div>

    <!-- Table with events -->
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><?php echo $TITRE ?></th>
            <th><?php echo $INTERVENANT ?></th>
            <th><?php echo $DATE ?></th>
            <th><?php echo $LIEU ?></th>
            <th><?php echo $MODIFIER."/".$SUPPRIMER?></th>
          </tr>
        </thead>
        <tbody>
          <?php
            print_all_conference_admin($url);
           ?>
        </tbody>
      </table>
    </div>
