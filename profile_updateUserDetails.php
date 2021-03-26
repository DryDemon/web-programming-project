<?php
    function updateUsernameStuff(){

        $username = $_POST['username'];   
        $last_name = $_POST['last_name'];   
        $first_name = $_POST['first_name'];   
        $email = $_POST['email'];   


        
    }

    
    function updateAdressStuff(){
        $adress = $_POST['adress'];   
        $city = $_POST['city'];   
        $country = $_POST['country'];   

    }
    function updateCardStuff(){
        $ccn = $_POST['ccn'];   
        $exp = $_POST['exd'];   
        $cvc = $_POST['cvc'];   

    }


    if(isset($_POST['type'])){

        $type=$_POST['type'];
         
        switch($type){
            case 0:
                    updateUsernameStuff();
                break;
                case 1:
                    updateAdressStuff();

                break;
            case 2:
                updateCardStuff();
                break;
        }
    }


    //redirect
    // header( "Location: "."http://".$_SERVER["HTTP_HOST"]."/profile.php");


?>