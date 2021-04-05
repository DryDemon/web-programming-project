<?php

require_once("mysqlConnection.php");
$dbConn = MyConnection();

function addProductInDB()//create a query to add a product in the db, return the last id of the product list
{
  $dbConn = MyConnection();
  $Verify = $dbConn->query('INSERT INTO Product (Name,Description,Category,Image,Video,Price) VALUES (\'' . $_POST["ProductName"] . '\',\'' . $_POST["ProductDescription"] . '\',\'' . $_POST["ProductCategory"] . '\',\''.$_POST["ProductImage"].'\',\'vide\',' . $_POST["ProductPrice"] . ')');
  $last_id = $dbConn->insert_id;
  echo $last_id;
  return $last_id;
}

function addTransactionInDB($productId)//create a query to add a transaction in the db
{
  $dbConn = MyConnection();
  $todaydate = date('Y-m-d');
  $newdate = date('Y-m-d', strtotime($_POST["ProductDeadLine"]));
  require_once("userConnection.php");
  $utilisateur = getCurrentUserData();
  $dbConn->query('INSERT INTO Transaction (Type,CreationDate,EndDate,idproduct,idSeller) VALUES (\'' . $_POST["ProductType"] . '\',\'' . $todaydate . '\',\'' . $newdate . '\',\'' . $productId . '\',' . $utilisateur[0] . ')');
}

function sqlLog()//print the sql log of the db
{
  $dbConn = MyConnection();
  if ($dbConn->connect_error) {
    die('Connect Error : ' . $dbConn->connect_error);
  }
}

if (isset($_POST["ProductName"]) && isset($_POST["ProductCategory"]) && isset($_POST["ProductType"]) && isset($_POST["ProductDescription"]) && isset($_POST["ProductPrice"])) {//if all the inputs necessary inputs are completed, add the product in the db
  $productId = addProductInDB();
  sqlLog();
  echo 'step1';
  addTransactionInDB($productId);
  sqlLog();
  echo 'step2';
  header("Location: " . "http://" . $_SERVER["HTTP_HOST"] . "/Shop.php");
} else {
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
