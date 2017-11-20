<?php
  if(!$level){
    header("Location: /ZZAgenda/index.php");
    exit();
  }
 ?>

<h3><?php echo $DECONNEXION ?></h3>

<?php

  session_unset();
  session_destroy();
  header("Location: $url");
 ?>
