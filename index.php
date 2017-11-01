<?php
  define('__ROOT__', dirname(__FILE__));
  require_once(__ROOT__.'/functions/file.php');
  require_once(__ROOT__.'/functions/json_parser.php');
  require_once(__ROOT__.'/functions/conf_manager.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://use.fontawesome.com/ef7e0d3fcd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <title>ZZAgenda</title>
  </head>
  <body>

    <!-- Header -->
    <?php include __ROOT__.'/include/header.php';




    print_all_conference();




    include __ROOT__.'/include/footer.php'; ?>



  </body>
</html>
