<?php
  define('__ROOT__', dirname(__FILE__));
  $full_url = $_SERVER["REQUEST_URI"];



  $list = explode("/", $full_url);
  $i=1;
  $url = '/';


  while($list[$i] != "ZZAgenda"){
    $url .= $list[$i].'/';
    $i += 1 ;
  }
  $url .= 'ZZAgenda';


  require_once(__ROOT__.'/functions/file.php');
  require_once(__ROOT__.'/functions/json_parser.php');
  require_once(__ROOT__.'/functions/conf_manager.php');
  require_once(__ROOT__.'/functions/functions.php');
  require_once(__ROOT__.'/functions/auth.php');
  require_once(__ROOT__.'/functions/csv_parser.php');



    extract($_GET);

    if(isset($lang)){
    if($lang == 'fr'){
      require_once(__ROOT__.'/functions/fr_FR.php');
    } else {
      require_once(__ROOT__.'/functions/en_EN.php');
    }
  }

  chiffrementDatabase(); //Hash les passwords seulement si ils n'ont pas été chiffrés



 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $url ?>/css/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url ?>/css/style.css" type="text/css">
    <script src= "<?php echo $url ?>/js/scripts.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/ef7e0d3fcd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <title>ZZAgenda</title>
  </head>
  <body>

    <!-- Header -->
    <?php include  __ROOT__.'/include/header.php'  ?>



    <?php

          $pages = array('admin', 'ajoutConf', 'connexion', 'modifierConf');

          if (!empty($page)) {
            if(in_array($page,$pages)) {
        			$page = "pages/".$page.'.php';
        		} else {
              $page = 'pages/error/404.php';
        		}
          } else {
        		$page= "pages/default.php";
        	}

          include($page);

    ?>

    <!-- Footer -->
    <?php
      include  __ROOT__.'/include/footer.php'
    ?>
  </body>
</html>
