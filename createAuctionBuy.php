<?php
function analyseUser()
    {
        require_once "mysqlConnection.php";
        require_once "userConnection.php";

        $user = getCurrentUserData();

        if($user[4]!='vide' && $user[5]!='vide' && $user[6]!='vide' && $user[9]!=1 && $user[10]!='vide' && $user[11]!=0){
            return true;//information completed
        }
        else{
            return false;//missing information
        }
    }

    if(analyseUser())
    {
        $idproduct = $_POST['productId'];
        $Offer = $_POST['Offer'];
        require_once "getSql.php";
        updateAuctionPrice($idproduct, $Offer);
    
    }
    
    header("Location: " . "http://" . $_SERVER["HTTP_HOST"] . "/Shop.php");
?>    