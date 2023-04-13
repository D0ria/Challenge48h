<?php
    namespace connexion;

    require "DAO.php";
    use mysqli;
    class connexion
    {
        public mysqli $connexion; 

        public function __construct(){
        $this->connexion = $this->host();
        }
    public function host(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'ynoresto';  
    $conn= mysqli_connect($servername, $username, $password,$database);
        return $conn;
    }
}    
?>