<?php

require_once("getSql.php");

if(isset($_GET["id"]) && isset($_GET["status"] )){
    updateNegociationStatus($_GET["id"] ,$_GET["status"]);
    echo "there";
}

header("Location: " . "http://" . $_SERVER["HTTP_HOST"] . "/negociation.php");

?>