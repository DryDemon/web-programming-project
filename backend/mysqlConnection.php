<?php
    function connectToMysql(){
        $pdo = new PDOConnector(
            'bzztzotiwn15xtcxbmgp-mysql.services.clever-cloud.com', // server
            'uxd5jmnb3cu2ukyn',      // user
            'wcixfJDJBModaw8RlZaN',      // password
            'bzztzotiwn15xtcxbmgp'   // database
        );
        
        $pdoConn = $pdo->connect('utf8', []); // charset, options
        
        //
        // you could now interact with PDO for instance setting attributes etc:
        // $pdoConn->setAttribute($attribute, $value);
        //
        
        $dbConn = new Mysql($pdoConn);
        
        return $dbConn;
    }
?>
