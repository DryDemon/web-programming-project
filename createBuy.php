<?php 
    

    function analyseUser()//analyse if the user's information are enough completed on his profile
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

    function getIdSeller($idproduct)//get the id of the targeted product
    {
        require_once("mysqlConnection.php");
        $dbConn = MyConnection();
        $resultId = $dbConn->query('SELECT idSeller FROM Transaction WHERE idproduct = '.$idproduct);
        $row = $resultId->fetch_row();
        return $row[0];
    }

    
    require_once("mysqlConnection.php");
    $dbConn = MyConnection();

    require_once "userConnection.php";//get the necessecary variable to complete the query
    $iduser = getCurrentUserData()[0];
    $idproduct = $_POST['productId'];
    echo $idproduct;
    $idseller =  getIdSeller($idproduct);
    $currentOffer = $_POST['price'];
    $Offer = $currentOffer;

    if(analyseUser()){//if the information of the user are enough, then the query ll be sent to the database
        $dbConn->query('INSERT INTO Negotiation (idUser,idSeller,Status,inComingOffer,currentOffer,idProduct) VALUES ('.$iduser.','.$idseller.',\'Accepted\','.$Offer.','.$currentOffer.','.$idproduct.')');
        echo '<hr> done';
        $dbConn->query('DELETE FROM Transaction WHERE idproduct = '.$idproduct);
    }
    else
    {
        echo'verifier profile';
        //add js
    }
   
    header( "Location: "."http://".$_SERVER["HTTP_HOST"]."/Shop.php");

?>