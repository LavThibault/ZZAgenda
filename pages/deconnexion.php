<h3><?php echo $DECONNEXION ?></h3>

<?php
  session_unset();
  session_destroy();
  header('Location: connexion');
 ?>
