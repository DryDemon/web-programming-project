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

    function getIdSeller($idproduct)
    {
        require_once("mysqlConnection.php");
        $dbConn = MyConnection();
        $resultId = $dbConn->query('SELECT idSeller FROM Transaction WHERE idproduct = '.$idproduct);
        $row = $resultId->fetch_row();
        return $row[0];
    }

    
    require_once("mysqlConnection.php");
    $dbConn = MyConnection();

    require_once "userConnection.php";
    $iduser = getCurrentUserData()[0];
    $idproduct = $_POST['productId'];
    echo $idproduct;
    $idseller =  getIdSeller($idproduct);
    $currentOffer = $_POST['price'];
    $Offer = $currentOffer;

    if(analyseUser()){
        $dbConn->query('INSERT INTO Negotiation (idUser,idSeller,Status,inComingOffer,currentOffer,idProduct) VALUES ('.$iduser.','.$idseller.',\'Done\','.$Offer.','.$currentOffer.','.$idproduct.')');
        echo '<hr> done';
        $dbConn->query('DELETE FROM Transaction WHERE idproduct = '.$idproduct);
    }
    else
    {
        echo'verifier profile';
        //add js
    }
   

?>