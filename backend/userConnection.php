<?php

    use \Firebase\JWT\JWT;

    require_once('jwtFunctions.php');
    require_once('mysqlConnection.php');

    function isUserConnected(){

        //getJwtToken from user cookie
        $jwt = htmlspecialchars($_COOKIE["jwt"]);

        $jwtKey = getJwtKey();
        
        // $jwt = JWT::encode($payload, $jwtKey);
        $decoded = JWT::decode($jwt, $jwtKey, array('HS256'));
        $user = getUserInDBById($decoded["id"]);

        if($user != null){

            return true;
            
        }else{
            return false;
        }
        
    }

    function connectUser($email, $password){

        $jwtKey = getJwtKey();
        $user = getUserInDBByEmail($email);
        
        if($user != null && $user['Password'] == $password){

            $jwt = JWT::encode($user, $jwtKey);

            setcookie ( "jwt" , $jwt , 9999999 , "/"  );

            console_log("user is connected");

            return true;
            
            
        }else{
            console_log("user error");
            return false;
        }
        
    }

    function getUserInDBById($id){

        $dbConn = connectToMysql();
        
        $result = $dbConn->fetchRow('SELECT id , LastName, Nickname, Email, City, Country, Adress, Password, Name FROM users WHERE id = :id', ['id' => $id]);


        return $result;


    }

    function getUserInDBByEmail($email){

        $dbConn = connectToMysql();
        
        $result = $dbConn->fetchRow('SELECT id , LastName, Nickname, Email, City, Country, Adress, Password, Name FROM users WHERE email = :email', ['email' => $email]);


        return $result;


    }

    function verifyUser($email){
        $dbConn = MyConnection();

        $result = $dbConn->query('SELECT * FROM User WHERE Email = \''.$email.'\'');
        $row = $result->fetch_assoc();

        if($row != null)
        {
            $test = true;
            return $test;
        }
        else{
            $test = false;
            return $test;
        }
        echo 'test';

    }


    function console_log( $data ){
        echo '<script>';
        echo 'alert('. ( $data ) .')';
        echo '</script>';
      }

    
?>

