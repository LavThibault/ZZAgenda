<?php

function numberToGroup($number){
  switch ($number) {
    case 1:
      $g = 'user';
      break;

    case 2:
      $g = 'admin';
      break;

    default:
      $g = 'visitor';
      break;
  }
  return $g;
}

function groupToNumber($group){
  switch ($group) {
    case 'user':
      $g = 1;
      break;

    case 'admin':
      $g = 2;
      break;

    default:
      $g = 0;
      break;
  }
  return $g;
}

function print_user_admin($user, $id){
  global $MODIFIER;
  echo"<tr>
         <td>";
           echo $user[0];
    echo"</td>
         <td>";
           echo numberToGroup($user[2]);
    echo"</td>
    <td>
      <form class=\"form-horizontal col-5\" method=\"post\">
        <select name=\"role\">
          <option>admin</option>
          <option>user</option>
        </select>
        <button id=\"submit\" name=\"".$id."\" class=\"btn btn-primary\" type=submit>".$MODIFIER."</button>
      </form>
     </td>
  </tr>";
}

function print_all_users_admin(){
  $all_users = get_users();
  $id = 1;
  foreach($all_users as $user){
    if($user[2] != 'level'){
      print_user_admin($user, $id);
      $id = $id + 1;
    }
  }
}

function modification(){
  if(!empty($_POST)){
    $array = get_users();
    $role = groupToNumber($_POST['role']);
    $user = array_search("",$_POST);
    $array[$user][2] = $role;
    set_users($array);
  }
}

?>
