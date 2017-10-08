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

    <div class="container">
      <div class="row" id="pageTitle">
        <a type="button" class="btn btn-primary col-1 mb-3 mt-3" href="admin.php">Retour</a>

      </div>
    </div>

    <div class="container">

  	     <form class="form-horizontal">
           <fieldset>

             <!-- Form Name -->
             <legend><center>Ajouter une conférence</center></legend>

             <!-- Text input-->
             <div class="form-group">
               <label class="col-md-4 control-label" for="requestid">Titre</label>
               <div class="col-md-4">
                 <input id="requestid" name="reqid" class="form-control input-md" required="" type="text">
               </div>
             </div>

             <!-- Text input-->
             <div class="form-group">
               <label class="col-md-4 control-label" for="requestid">Intervenant</label>
               <div class="col-md-4">
                 <input id="requestid" name="reqid" class="form-control input-md" required="" type="text">
               </div>
             </div>

              <!-- Textarea -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="dis">Description</label>
                <div class="col-md-4">
                  <textarea class="form-control" id="dis" name="dis"></textarea>
                </div>
              </div>


              </div>
              <!-- Button -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label><center>
                <div class="col-md-4">
                  <button id="submit" name="submit" class="btn btn-primary">Ajouter</button>
                </div></center>
              </div>

            </fieldset>
          </form>


       </div>

    <!-- Footer -->
    <?php include 'include/footer.php' ?>
  </body>
</html>
