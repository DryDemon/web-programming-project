<?php

require_once("mysqlConnection.php");
$dbConn = MyConnection();

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
        addUserInDB("null","null",$_POST['username'],$_POST['email'],"null","null","null",$_POST['password']);
        //connectuser
        header( "Location: http://localhost/web-programming-project/realize/shop.html");
       
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