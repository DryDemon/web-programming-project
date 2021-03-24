<?php

    function createTables(){
        require_once('mysqlConnection.php');
        $dbConn = connectToMysql();

        // querys
// DROP TABLE IF EXISTS User
// CREATE TABLE User (id BIGINT AUTO_INCREMENT NOT NULL, LastName VARCHAR(255), Nickname VARCHAR(255), Email VARCHAR(255), City VARCHAR(255), Country VARCHAR(255), Adress VARCHAR(255), Password VARCHAR(256), Name VARCHAR(255), PRIMARY KEY (id)) ENGINE=InnoDB

// DROP TABLE IF EXISTS Transaction
// CREATE TABLE Transaction (id BIGINT AUTO_INCREMENT NOT NULL, Type INT, CreationDate DATE, EndDate DATE, PRIMARY KEY (id)) ENGINE=InnoDB

// DROP TABLE IF EXISTS Product
// CREATE TABLE Product (id BIGINT AUTO_INCREMENT NOT NULL, Name VARCHAR(255), Description VARCHAR(255), Category VARCHAR(255), Image VARCHAR(255), Video VARCHAR(255), Price DOUBLE, PRIMARY KEY (id)) ENGINE=InnoDB

// DROP TABLE IF EXISTS Negotiation
// CREATE TABLE Negotiation (idUser bigint NOT NULL, idTransaction bigint Auto_Increment NOT NULL, idSeller BIGINT, Status_OnGoingTransaction VARCHAR(255), PRIMARY KEY (idTransaction)) ENGINE=InnoDB


    }
?>
