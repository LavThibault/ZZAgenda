<?php
  if($level < 2){
    header("Location: /ZZAgenda/index.php");
    exit();
  }

  extract($_GET);
 ?>

    <div class="container mb-3 mt-3">
      <div class="row justify-content-around" id="pageTitle">

        <div class="text-center col-xs-6 col-sm-6 col-md-6 col-lg-7 col-xl-7">
          <h2><?php echo $CONFIRMER_LA_SUPPRESSION ?></h2>
        </div>
      </div>
      <div class="container d-flex align-items-center">
        <div class="container col-4">
          <?php

           extract($_GET);

           $c = get_conference($conf);
           print_conference($c,NULL);
          ?>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <form class="" method="post">
            <div class="row col-10">
              <button name="submit" type="submit" class="btn btn-primary" style="cursor:pointer"><?php echo $SUPPRIMER ?></button>
              <a type="button" class="btn btn-primary" href="<?php echo $url ?>/index.php?lang=<?php echo $lang ?>&page=admin"><?php echo $ANNULER ?></a>
            </div>
          </form>
        </div>
      </div>
    </div>


    <?php
      if(isset($_POST['submit']))
      {
        delete_conference($conf);
        ?>
        <script type="text/javascript">
          load_page("<?php echo $url ?>/index.php?lang=<?php echo $lang ?>&page=admin");
        </script>
        <?php
      }
    ?>
