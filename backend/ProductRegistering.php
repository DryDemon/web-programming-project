<?php

$ProductName=$_POST["ProductName"];
$ProductCategory=$_POST["ProductCategory"];
$ProductType=$_POST["ProductType"];
$ProductDescription=$_POST["ProductDescription"];
$ProductPrice=$_POST["ProductPrice"];
$ProductDeadLine=$_POST["ProductDeadLine"];
$ProductVideo=$_POST["ProductVideo"];

$uploaddir = '/uploads/';
$ProductImage= $uploaddir . basename($_FILES['ProductImage']['name']);

echo "Name : ".$ProductName."<br>Category : ".$ProductCategory."<br>Type : ".$ProductType."<br>Description : ".$ProductDescription."<br>Price : ".$ProductPrice."<br>DeadLine : ".$ProductDeadLine."<br> Video : ".$ProductVideo."<br> Image : ".$ProductImage;




?>