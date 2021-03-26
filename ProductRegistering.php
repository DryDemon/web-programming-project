<?php

require_once("mysqlConnection.php");
$dbConn = MyConnection();

function addProductInDB($name,$description,$category,$image,$video,$Price){
    $dbConn = MyConnection();
    $Verify = $dbConn->query('INSERT INTO User (Name,Description,Category,Image,Video,Price) VALUES (\''.$_POST["ProductName"].'\',\''.$_POST["ProductDescription"].'\',\''.$_POST["ProductCategory"].'\',\'vide\',\'vide\',\''.$_POST["ProductPrice"].'\')');  
}

function addTransactionInDB($type,$CreationDate,$Endate){
    $dbConn = MyConnection();
    $todaydate = getdate();
    $idproduct = $dbConn->query('SELECT LAST_INSERT_ID()');
    $Verify = $dbConn->query('INSERT INTO User (Type,CreationDate,EndDate,idproduct) VALUES (\''.$$_POST["ProductType"].'\',\''.$todaydate.'\',\''.$_POST["ProductDeadLine"].'\',\'v'.$idproduct.'\')');  
}


// $ProductName=$_POST["ProductName"];
// $ProductCategory=$_POST["ProductCategory"];
// $ProductType=$_POST["ProductType"];
// $ProductDescription=$_POST["ProductDescription"];
// $ProductPrice=$_POST["ProductPrice"];
// $ProductDeadLine=$_POST["ProductDeadLine"];
// $ProductVideo=$_POST["ProductVideo"];

// $uploaddir = '/uploads/';
// $ProductImage= $uploaddir . basename($_FILES['ProductImage']['name']);

// echo "Name : ".$ProductName."<br>Category : ".$ProductCategory."<br>Type : ".$ProductType."<br>Description : ".$ProductDescription."<br>Price : ".$ProductPrice."<br>DeadLine : ".$ProductDeadLine."<br> Video : ".$ProductVideo."<br> Image : ".$ProductImage;




?>