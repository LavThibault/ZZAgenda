<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <title>ZZAgenda</title>
  </head>
  <body>

    <!-- Header -->
    <?php include 'include/header.php' ?>

    <!--Page title-->
    <div class="container mb-3 mt-3 ">
      <div class="row justify-content-around" id="pageTitle">

        <div class="text-center col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <h2>Administration</h2>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <a type="button" class="btn btn-primary col-12" href="ajoutConf.php">Ajouter une conférence</a>
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
            <th>Modifier/Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Conférence cybersécurité</td>
            <td>Hervé Firewall</td>
            <td>Lundi 16 octobre</td>
            <td>Modif.    Supp.</td>
          </tr>
          <tr>
            <td>Conférence BDD</td>
            <td>Percy Stance</td>
            <td>Mercredi 18 octobre</td>
            <td>Modif.    Supp.</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Footer -->
    <?php include 'include/footer.php' ?>
  </body>
</html>
