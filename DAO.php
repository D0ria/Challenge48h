<?php
use connexion\connexion;
class DAO extends connexion{
    function conn($email,$password){
        $connect =$this-> host();
        $newconn ='SELECT * FROM users WHERE Email=? AND Password=?';
        
        $verif = $connect->prepare($newconn);
        if(isset($verif)){
            var_dump($verif);
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            var_dump($email, $password);
            echo "test" ;
        }        
    }
}

?>