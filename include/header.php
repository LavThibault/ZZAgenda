<header>
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-3">
        <h1>ZZAgenda</h1>
      </div>

      <?php

    /*  if(preg_match_all('/\/([fr,en]+)\/([a-z,A-Z,_]*)/',$str,$m)){

        $actual_lang = ($m[1][0]);
        $actual_page = ($m[2][0]);

        $actual_page = '/'.get_other_language_page($actual_page,$actual_lang,'en');

      } else {
        $actual_page = '';
      }
*/
      echo $url;
       ?>

      <div>
        <select id="language" name="language" class="form-control" onChange="window.location.href=this.value">
          <option value="<?php echo $url ?>/fr">Français</option>
          <option value="<?php echo $url ?>/en">Anglais</option>
        </select>
      </div>

    </div>
  </div>
</header>
