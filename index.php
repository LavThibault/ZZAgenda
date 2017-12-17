<?php
  session_start();

  if(!isset($_SESSION['level'])){
    $_SESSION['level'] = 0;
  }

  define('__ROOT__', dirname(__FILE__));

  /* Define $url in order to load pages the same way on different servers from the root url */
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
  require_once(__ROOT__.'/functions/auth.php');
  require_once(__ROOT__.'/functions/csv_parser.php');
  require_once(__ROOT__.'/functions/user_manager.php');


  /* Allows to call $var instead of $_POST['var'] or $_GET['var'] */
  extract($_GET);
  extract($_SESSION);

  /* Load the correct language file */
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

  /* Hash passwords only if they're not already */
  chiffrementDatabase();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $url ?>/css/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url ?>/css/sketchy.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url ?>/css/style.css" type="text/css">
    <script src= "<?php echo $url ?>/js/scripts.js"></script>
    <!-- Include jQuerys for the calendar use -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

    <!-- Include fontawesome for the icons use -->
    <script src="https://use.fontawesome.com/ef7e0d3fcd.js"></script>

    <!-- Include tinymce for text format use on textareas -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

    <title>ZZAgenda</title>
  </head>
  <body>

    <!-- Load Header -->
    <?php

    include  __ROOT__.'/include/header.php';

    /* Array containing allowed pages based on users level */
    $unknown = array('connexion');
    $user = array('connexion', 'conferences', 'deconnexion');
    $admin = array('admin', 'adminUser', 'ajoutConf', 'connexion', 'modifierConf', 'conferences', 'deconnexion', 'suppression');

    /* Define the page to load depending on previously defined parameters */
    if (empty($page)) { //if no page is requested (default page)

      if(!$level){
        $page = "pages/connexion.php"; //not connected users
      } else {
        $page = "pages/conferences.php"; //connected users
      }
    }
    else
    {
      if(in_array($page,$admin)) { //if the page requested existed

        if($_SESSION['level'] == 0 && in_array($page, $unknown)){ //Check access right for unknown users
          $page = 'pages/'.$page.'.php';
        }
        else
        if ($_SESSION['level'] == 1 && in_array($page, $user)) { //Check access right for normal users
          $page = 'pages/'.$page.'.php';
        }
        else
        if($_SESSION['level'] == 2){ //if a page is requested for admin users
          $page = 'pages/'.$page.'.php';
        }
        else
        {
          $page = 'pages/error/401.php'; //Unauthorized access
        }
      }
      else
      {
        $page = 'pages/error/404.php'; //Unknown page
      }
    }
    include($page); //Load page content

    ?>

    <!-- Load Footer -->
    <?php
      include  __ROOT__.'/include/footer.php'
    ?>
  </body>
</html>
