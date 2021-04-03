<?php

require_once("mysqlConnection.php");
$dbConn = MyConnection();


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

    function getIdSeller($idproduct)
    {
        $resultId = $dbConn->query('SELECT idSeller FROM Transaction WHERE idproduct = '.$idproduct.);
        return $resultId;
    }

    function createNegociation()
    {
        require_once "userConnection.php";
        $iduser = getCurrentUserData();
        $idproduct;
        $idseller =  getIdSeller($idproduct);
        $currentOffer;
        $Offer = $_POST['Offer'];
    }
?>