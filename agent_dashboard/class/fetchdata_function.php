<?php
    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "line_items";

   

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

// SELECT COUNT(li_id) AS count FROM line_items WHERE transf_submit_date >= CURRENT_DATE AND user_id="101"
       public function get_single_form(){
            $sqlQuery = "SELECT
                        COUNT(li_id) AS count1
                      FROM
                        ". $this->db_table ."
                    WHERE 
                    transf_submit_date >= CURRENT_DATE AND
                       user_id = ?
                    ";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->user_id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->count1 = $dataRow['count1'];
            
        }


    }
?>