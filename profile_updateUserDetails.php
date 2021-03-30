<?php
require_once "mysqlConnection.php";
require_once "userConnection.php";

function updateUsernameStuff()
{

    $username = $_POST['username'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];

    $id = getCurrentUserData()[0];
    
    $dbConn = MyConnection();
    $update = $dbConn->query("Update User SET Nickname='" . $username . "', LastName='" . $last_name . "', Name='" . $first_name . "', Email='" . $email . "' WHERE id=" . $id);
    echo("Update User SET Nickname='" . $username . "', LastName='" . $last_name . "', Name='" . $first_name . "', Email='" . $email . "' WHERE id=" . $id);
}

function updateAdressStuff()
{
    $adress = $_POST['adress'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    
    $id = getCurrentUserData()[0];
    
    $dbConn = MyConnection();
    $update = $dbConn->query("Update User SET Adress='" . $adress . "', City='" . $city . "', Country='" . $country . "' WHERE id=" . $id);
    
}
function updateCardStuff()
{
    $ccn = $_POST['ccn'];
    $exp = $_POST['exd'];
    $cvc = $_POST['cvc'];
    
    $id = getCurrentUserData()[0];
    
    $dbConn = MyConnection();
    $update = $dbConn->query("Update User SET ccnumber='" . $ccn . "', expdate='" . $exp . "', cvnumber='" . $cvc . "' WHERE id=" . $id);
}

if (isset($_POST['type'])) {
    
    $type = $_POST['type'];

    switch ($type) {
        case 0:
            updateUsernameStuff();
            break;
        case 1:
            updateAdressStuff();

            break;
        case 2:
            updateCardStuff();
            break;
    }
}

refreshCookie();

//redirect
header( "Location: "."http://".$_SERVER["HTTP_HOST"]."/profile.php");
