<header>
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-3">
        <h1>ZZAgenda</h1>
      </div>

      <?php

        $str = $_SERVER["REQUEST_URI"];

        if(preg_match_all('/\/([fr,en]+)\/([a-z,A-Z,_]*)/',$str,$m)){

        $actual_lang = ($m[1][0]);
        $actual_page = ($m[2][0]);

        $actual_page = get_other_language_page($actual_page,$actual_lang,'en');

        }

       ?>

      <div>
        <select id="language" name="language" class="form-control" onChange="window.location.href=this.value">
          <option value="/www/ZZAgenda/fr/">Français</option>
          <option value="/www/ZZAgenda/en/<?php echo $actual_page ?>">Anglais</option>
        </select>
      </div>

    </div>
  </div>
</header>
