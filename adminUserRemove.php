<?php

$target = $_POST['userSelected'];
echo 'target : '. $target;
require_once("mysqlConnection.php");
$dbConn = MyConnection();

$dbConn->query('DELETE FROM User WHERE Email = \''.$target.'\';');

header("Location: " . "http://" . $_SERVER["HTTP_HOST"] . "/Shop.php");

?>