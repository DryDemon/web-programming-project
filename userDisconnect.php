<?php
require_once("userConnection.php");

logoutUser();

header( "Location: "."http://".$_SERVER["HTTP_HOST"]."/Shop.php");
?>