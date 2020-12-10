<?php
    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "clients";

        // Columns
 

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        
        	

       

        // GET ALL
        public function get_form(){
            $sqlQuery = "SELECT c_id, first_name, middle_name, last_name, company_name, title,phone,ext,cell_phone,home_phone,email_id,address,country,state FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
    }
?>