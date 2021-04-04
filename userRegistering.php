<?php
require "./vendor/autoload.php";


require_once("mysqlConnection.php");
$dbConn = MyConnection();

use Bcrypt\Bcrypt;

// Instantiate an Bcrypt instance.
$bcrypt = new Bcrypt();


function addUserInDB($lastname,$name,$nickname,$email,$city,$country,$adress,$password){
    $dbConn = MyConnection();
    $Verify = $dbConn->query('INSERT INTO User (LastName,Nickname,Email,City,Country,Adress,Password,Name) VALUES (\'vide\',\''.$nickname.'\',\''.$email.'\',\'vide\',\'vide\',\'vide\',\''.$password.'\',\'vide\')');  
}

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
{
    
     require_once("userConnection.php");
     $user = verifyUser($_POST['email']);
    if($user == false)
    {
        
        $count = $dbConn->query('SELECT MAX(id) FROM User');
        $count++;
        $nick = $_POST['username'];
        addUserInDB("null","null",$_POST['username'],$_POST['email'],"null","null","null",$bcrypt->encrypt($_POST['password'],'2a'));
        connectUser($_POST['email'], $_POST['password']);
        //connectuser
        header( "Location: "."http://".$_SERVER["HTTP_HOST"]."/Shop.php");
       
    }
    else{
        echo '<body style="background-color:red">';
    }
    
}
else
{
    echo 'Please, adjust your input before continuing.';
}

?>