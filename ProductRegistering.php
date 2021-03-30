<?php

require_once("mysqlConnection.php");
$dbConn = MyConnection();

function addProductInDB(){
    $dbConn = MyConnection();
    $Verify = $dbConn->query('INSERT INTO Product (Name,Description,Category,Image,Video,Price) VALUES (\''.$_POST["ProductName"].'\',\''.$_POST["ProductDescription"].'\',\''.$_POST["ProductCategory"].'\',\'vide\',\'vide\','.$_POST["ProductPrice"].')');  
}

function addTransactionInDB(){
  $dbConn = MyConnection();
   $result = $dbConn->query('SELECT COUNT(*) FROM Product;');
   $row = $result->fetch_array(MYSQLI_NUM);
   $todaydate = date('Y-m-d');
    $newdate = date('Y-m-d', strtotime($_POST["ProductDeadLine"]));
    require_once("userConnection.php");
    $utilisateur = getCurrentUserData();
    $dbConn->query('INSERT INTO Transaction (Type,CreationDate,EndDate,idproduct,idSeller) VALUES (\''.$_POST["ProductType"].'\',\''.$todaydate.'\',\''.$newdate.'\',\''.$row[0].'\','. $utilisateur[0].')');  
}

function sqlLog()
{
  $dbConn = MyConnection();
  if($dbConn->connect_error)
  {
    die('Connect Error : ' . $dbConn->connect_error);
  }

}

if(isset($_POST["ProductName"]) && isset($_POST["ProductCategory"]) && isset($_POST["ProductType"]) && isset($_POST["ProductDescription"]) && isset($_POST["ProductPrice"]) )
{
  addProductInDB();
  sqlLog();
  echo 'step1';
  addTransactionInDB();
  sqlLog();
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