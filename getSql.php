<?php

require_once("mysqlConnection.php");
$dbConn = MyConnection();

function getAllProductInDBByDate(){
    $dbConn = MyConnection();
    $result = $dbConn->query('SELECT * from Product');  
    return $result;

    // $row = $result->fetch_array(MYSQLI_NUM);
}

function getAllTransactionsInDBByDate(){
    $dbConn = MyConnection();
    $result = $dbConn->query('SELECT * from Transaction');  
    return $result;

    // $row = $result->fetch_array(MYSQLI_NUM);
}


function getUserHistory($userId){
    $dbConn = MyConnection();
    $result = $dbConn->query("SELECT * from Negotiation WHERE Status LIKE 'Accepted' and  (idSeller = ".$userId." or idUser = ".$userId.")");  
    
    return $result;

}

function updateAuctionPrice($productId, $price){
    $dbConn = MyConnection();
    $result = $dbConn->query("UPDATE Product SET Price = ".$price." WHERE id = ".$productId);  

    return $result;

}

function updateNegociationStatus($idTransaction, $status){
    $dbConn = MyConnection();
    $result = $dbConn->query("UPDATE Negotiation SET Status = '".$status."' WHERE idTransaction = ".$idTransaction);  

    return $result;

}


?>