<?php

require_once("mysqlConnection.php");

if(isset($_POST['email']) && isset($_POST['password']))
{
    
     require_once("userConnection.php");
     $okay = connectUser($_POST['email'], $_POST['password']);
    if($okay == true)
    {
        
        header( "Location: "."http://".$_SERVER["HTTP_HOST"]."/Shop.php");
       
    }
    else{
        echo '<body style="background-color:red">';
                echo "<h1>Please verify your informations</h1>";
            echo "<a href='Login.php'>Go Back</a>";

    }
    
}
else
{
    echo 'Please, adjust your input before continuing.';
            echo "<a href='Login.php'>Go Back</a>";
            echo "<h1>Please verify your informations</h1>";

        }
