<?php
      function MyConnection()//information of the database, return a connection
  {
    $servername = "bzztzotiwn15xtcxbmgp-mysql.services.clever-cloud.com";
    $username = "uxd5jmnb3cu2ukyn";
    $password = "wcixfJDJBModaw8RlZaN";
    $dbname = "bzztzotiwn15xtcxbmgp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
?>
