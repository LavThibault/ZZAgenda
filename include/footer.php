<?php
  /* Function which returns a boolean if the user is registered */
  function isConnected(){
    $connected = FALSE;
    if($_SESSION['level']>0){
      $connected = TRUE;
    }
    return $connected;
  }

  /* Function which displays the home button */
  function accueilButton(){
    global $url, $lang, $ACCUEIL;
    if(isConnected()){
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/index.php?lang='.$lang.'&page=conferences">'.$ACCUEIL.'</a>';
    }
    else{
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/index.php?lang='.$lang.'&page=connexion">'.$ACCUEIL.'</a>';
    }
  }

  /* Function which displays the connexion button */
  function buttonConnexion(){
    global $url, $lang, $CONNEXION, $DECONNEXION;
    if(isConnected()){
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/index.php?lang='.$lang.'&page=deconnexion">'.$DECONNEXION.'</a>';
    }
    else{
      echo '<a type="button" class="btn btn-primary col-3" href="'.$url.'/index.php?lang='.$lang.'&page=connexion">'.$CONNEXION.'</a>';
    }
  }

  /* Function which displays the administration button */
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
      <?php adminButton() ?>
      <?php buttonConnexion() ?>

    </div>
  </div>
</footer>
