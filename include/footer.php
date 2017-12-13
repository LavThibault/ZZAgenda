<?php
  function isConnected(){
    $connected = FALSE;
    if($_SESSION['level']>0){
      $connected = TRUE;
    }
    return $connected;
  }

  function accueilButton(){
    global $url, $lang, $ACCUEIL;
    if(isConnected()){
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/index.php?lang='.$lang.'&page=conferences">'.$ACCUEIL.'</a>';
    }
    else{
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/index.php?lang='.$lang.'&page=connexion">'.$ACCUEIL.'</a>';
    }
  }

  function buttonConnexion(){
    global $url, $lang, $LIEN_CONNEXION, $LIEN_DECONNEXION, $CONNEXION, $DECONNEXION;
    if(isConnected()){
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/index.php?lang='.$lang.'&page=deconnexion">'.$DECONNEXION.'</a>';
    }
    else{
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/index.php?lang='.$lang.'&page=connexion">'.$CONNEXION.'</a>';
    }
  }
  function adminButton(){
    if($_SESSION['level'] == 2){
      global $url, $lang, $ADMINISTRATION;
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/index.php?lang='.$lang.'&page=admin">'.$ADMINISTRATION.'</a>';
    }
  }
 ?>

<footer>
  <div class="container-fluid">
    <div class="row justify-content-around">
      <?php accueilButton() ?>
      <a type="button" class="btn btn-primary col-3"><?php echo $CARTE ?></a>
      <?php buttonConnexion() ?>
      <?php adminButton() ?>

    </div>
  </div>
</footer>
