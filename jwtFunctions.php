<?php

require '.\vendor\autoload.php';


use \Firebase\JWT\JWT;


    $jwtKey = "pz4CpsaI3bZtucQB8B5jONE073DM33fd4eHyvE0a4pg";
    $publicJwtKey = "fHGQJ1BHTNB/r4JXzpvYiG5UL0yfI+S8Q8tJBKamEAE=";

    function getJwtKey(){
        return "pz4CpsaI3bZtucQB8B5jONE073DM33fd4eHyvE0a4pg";
    }

    function getJwtData(){
        if(isset($_COOKIE["jwt"])){
            $decoded = JWT::decode($_COOKIE["jwt"], getJwtKey(), array('HS256'));
            return $decoded;
        }
        return null;
    }



?>