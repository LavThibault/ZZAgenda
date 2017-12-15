<?php
  session_start();

  if(!isset($_SESSION['level'])){
    $_SESSION['level'] = 0;
  }

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
  extract($_SESSION);


  if(isset($lang)){
    if($lang == 'fr'){
      require_once(__ROOT__.'/functions/fr_FR.php');
    } else {
      require_once(__ROOT__.'/functions/en_EN.php');
    }
  } else{
    $lang = 'fr';
    require_once(__ROOT__.'/functions/fr_FR.php');
  }

  chiffrementDatabase(); //Hash les passwords seulement si ils n'ont pas été chiffrés

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $url ?>/css/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url ?>/css/sketchy.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url ?>/css/style.css" type="text/css">
    <script src= "<?php echo $url ?>/js/scripts.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/ef7e0d3fcd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <title>ZZAgenda</title>
  </head>
  <body>

    <!-- Header -->
    <?php include  __ROOT__.'/include/header.php';

    ?>



    <?php

          $unknown = array('connexion');
          $user = array('connexion', 'conferences', 'deconnexion');
          $admin = array('admin', 'ajoutConf', 'connexion', 'modifierConf', 'conferences', 'deconnexion', 'suppression');


          if (empty($page)) {
            if(!$level){
              $page = "pages/connexion.php";
            } else {
              $page = "pages/conferences.php";
            }
          } else {
            if(in_array($page,$admin)) {
              if($_SESSION['level'] == 0 && in_array($page, $unknown)){
                $page = 'pages/'.$page.'.php';
              } else if ($_SESSION['level'] == 1 && in_array($page, $user)) {
                $page = 'pages/'.$page.'.php';
              } else if($_SESSION['level'] == 2){
                $page = 'pages/'.$page.'.php';
              } else{
                $page = 'pages/error/401.php'; //Unauthorized
              }
        		} else {
              $page = 'pages/error/404.php';
        		}
          }

          include($page);

    ?>

    <!-- Footer -->
    <?php
      include  __ROOT__.'/include/footer.php'
    ?>
  </body>
</html>
