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
          <h2><?php echo $ADMINISTRATION_USER ?></h2>
        </div>

      </div>
    </div>

    <!-- Table with events -->
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><?php echo $USERNAME ?></th>
            <th><?php echo $GROUPE ?></th>
            <th><?php echo $MODIFIER?></th>
          </tr>
        </thead>
        <tbody>
          <?php
            modification();
            print_all_users_admin();
           ?>
        </tbody>
      </table>
    </div>
