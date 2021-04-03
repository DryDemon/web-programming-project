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
    $result = $dbConn->query('SELECT * from Negociation WHERE ');  

    return $result;

}


?>