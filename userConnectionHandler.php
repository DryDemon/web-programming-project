<?php

require_once("mysqlConnection.php");

if(isset($_POST['email']) && isset($_POST['password']))
{
    
     require_once("userConnection.php");
     $okay = connectUser($_POST['email'], $_POST['password']);
    if($okay == true)
    {
        
        header( "Location: "."http://".$_SERVER["HTTP_HOST"]."/shop.php");
       
    }
    else{
        echo '<body style="background-color:red">';
    }
    
}
else
{
    echo 'Please, adjust your input before continuing.';
}
