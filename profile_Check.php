<?php

require_once "mysqlConnection.php";
require_once "userConnection.php";

$user = getCurrentUserData();//4,5,6,9,10,11

if($user[4]!='vide' && $user[5]!='vide' && $user[6]!='vide' && $user[9]!=1 && $user[10]!='vide' && $user[11]!=0){
    return true;//information completed
}
else{
    return false;//missing information
}

?>