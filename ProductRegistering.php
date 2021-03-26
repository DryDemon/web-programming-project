<?php

require_once("mysqlConnection.php");
$dbConn = MyConnection();

function addProductInDB($name,$description,$category,$image,$video,$rpice){
    $dbConn = MyConnection();
    $Verify = $dbConn->query('INSERT INTO User (LastName,Nickname,Email,City,Country,Adress,Password,Name) VALUES (\'vide\',\''.$nickname.'\',\''.$email.'\',\'vide\',\'vide\',\'vide\',\''.$password.'\',\'vide\')');  
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