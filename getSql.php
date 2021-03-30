<?php

require_once("mysqlConnection.php");
$dbConn = MyConnection();

function getAllProductInDBByDate(){
    $dbConn = MyConnection();
    $result = $dbConn->query('SELECT * from Product');  
    return $result;

    // $row = $result->fetch_array(MYSQLI_NUM);
}




?>