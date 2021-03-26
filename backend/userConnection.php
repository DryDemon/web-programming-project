<?php
    require '..\vendor\autoload.php';


    use \Firebase\JWT\JWT;
    use Bcrypt\Bcrypt;

    
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

        // Instantiate an Bcrypt instance.
        $bcrypt = new Bcrypt();


        $jwtKey = getJwtKey();
        $user = getUserInDBByEmail($email);
        
        if($user != null && 
        $bcrypt->verify($password, $user[7])){
            
            $jwt = JWT::encode($user, $jwtKey);
            
            setcookie ( "jwt" , $jwt , time()+3600*24 * 999999 , "/"  );
            
            console_log("user is connected");

            return true;
            
            
        }else{
            console_log("user error");
            return false;
        }
        
    }

    function getUserInDBById($id){

        $dbConn = MyConnection();

        $result = $dbConn->query('SELECT * FROM User WHERE Password = \''.$id.'\'');
        $row =  $result->fetch_row();

        return $row;

    }

    function getUserInDBByEmail($email){

        $dbConn = MyConnection();

        $result = $dbConn->query('SELECT * FROM User WHERE Email = \''.$email.'\'');
        $row =  $result->fetch_row();

        return $row;


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
        echo 'alert("'. ( $data ) .'")';
        echo '</script>';
      }

    
?>

