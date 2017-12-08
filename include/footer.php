<?php
  function isConnected(){
    $connected = FALSE;
    if($_SESSION['level']>0){
      $connected = TRUE;
    }
    return $connected;
  }
  function buttonConnexion(){
    global $url, $lang, $LIEN_CONNEXION, $LIEN_DECONNEXION, $CONNEXION, $DECONNEXION;
    if(isConnected()){
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/'.$lang.'/'.$LIEN_DECONNEXION.'">'.$DECONNEXION.'</a>';
    }
    else{
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/'.$lang.'/'.$LIEN_CONNEXION.'">'.$CONNEXION.'</a>';
    }
  }
 ?>

<footer>
  <div class="container-fluid">
    <div class="row justify-content-around">
<<<<<<< HEAD
      <a type="button" class="btn btn-primary col-3" href="<?php echo $url ?>/<?php echo $lang ?>"><?php echo $ACCUEIL ?></a>
      <a type="button" class="btn btn-primary col-3"><?php echo $CARTE ?></a>
      <?php buttonConnexion() ?>
=======
      <a type="button" class="btn btn-info col-3" href="<?php echo $url ?>/index.php?lang=fr"><?php echo $ACCUEIL ?></a>
      <a type="button" class="btn btn-info col-3"><?php echo $CARTE ?></a>
      <a type="button" class="btn btn-info col-3" href="<?php echo $url ?>/index.php?lang=<?php echo $lang ?>&page=connexion"><?php echo $CONNEXION ?></a>
>>>>>>> styleSketchy
    </div>
  </div>
</footer>
