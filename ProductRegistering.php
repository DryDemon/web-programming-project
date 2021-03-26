<?php

require_once("mysqlConnection.php");
$dbConn = MyConnection();

function addProductInDB(){
    $dbConn = MyConnection();
    $Verify = $dbConn->query('INSERT INTO Product (Name,Description,Category,Image,Video,Price) VALUES (\''.$_POST["ProductName"].'\',\''.$_POST["ProductDescription"].'\',\''.$_POST["ProductCategory"].'\',\'vide\',\'vide\',\''.$_POST["ProductPrice"].'\')');  
}

function addTransactionInDB(){
    $dbConn = MyConnection();
    $todaydate = date("Y-m-d");
    $idproduct = $dbConn->query('SELECT LAST_INSERT_ID()');
    $newdate = date('Y-m-d', strtotime($_POST["ProductDeadLine"]));
    $Verify = $dbConn->query('INSERT INTO Transaction (Type,CreationDate,EndDate,idproduct) VALUES (\''.$$_POST["ProductType"].'\',\'2021-01-01\',\''.$newdate.'\',\'1\')');  
}

if(isset($_POST["ProductName"]) && isset($_POST["ProductCategory"]) && isset($_POST["ProductType"]) && isset($_POST["ProductDescription"]) && isset($_POST["ProductPrice"]) && isset($_POST["ProductDeadLine"]) && isset($_POST["ProductVideo"]))
{
  addProductInDB();
  echo 'step1';
  addTransactionInDB();
  echo 'step2';
}
else
{
 echo 'stepError';
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