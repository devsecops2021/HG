<?php 
    class Database {
        private $host = "localhost";
        private $database_name = "markaklq_rmt_v7";
        private $username = "markaklq";
        private $password = "HyQsoft!@34";

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>