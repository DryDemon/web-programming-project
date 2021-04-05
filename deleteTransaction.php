<?php
$idproduct = $_POST['ProductDelete'];
require_once("mysqlConnection.php");
$dbConn = MyConnection();

$dbConn->query('DELETE FROM Transaction WHERE idproduct = '.$idproduct);
header("Location: " . "http://" . $_SERVER["HTTP_HOST"] . "/Shop.php");
?>