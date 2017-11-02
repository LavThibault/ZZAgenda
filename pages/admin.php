<?php
if (empty($_GET['page'])) {
   header( "Location: http://localhost/www/ZZAgenda/index.php" );
   exit();
 }
?>
    <!--Page title-->
    <div class="container mb-3 mt-3 ">
      <div class="row justify-content-around" id="pageTitle">

        <div class="text-center col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <h2>Administration</h2>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <a type="button" class="btn btn-primary col-12" href="?page=ajoutConf">Ajouter une conférence</a>
        </div>

      </div>
    </div>

    <!-- Table with events -->
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Intervenant</th>
            <th>Date</th>
            <th>Lieu</th>
            <th>Modifier/Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php

            print_all_conference_admin();

           ?>
        </tbody>
      </table>
    </div>
