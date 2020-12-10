<?php
    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "city";

        // Columns
        public $city_id;
        public $country;
        public $city;
        public $state;
        //public $status;
       
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function get_form(){
            $sqlQuery = "SELECT city_id, country, city, state FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        
        	public function saveRecords($tbName,$u,$c,$s)
	{
//	$conn=$this->connect();
// echo $u;
	mysqli_query($conn,"insert into $tbName values('".$u."','".$c."','".$s."')");
	}

        // CREATE
        public function create_form(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        country = :country, 
                        state = :state,
                        city = :city";  
        //                age = :age, 
        //                designation = :designation, 
        //                created = :created";
// echo $sqlQuery;
            $stmt = $this->conn->prepare($sqlQuery);
        

            // sanitize
            $this->country=htmlspecialchars(strip_tags($this->country));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->state=htmlspecialchars(strip_tags($this->state));
           
            // bind data
            $stmt->bindParam(":country", $this->country);
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":state", $this->state);
                           if($stmt->execute()){
               return true;
            }
            return false;

        }

        // READ single
        public function get_single_form(){
            $sqlQuery = "SELECT
                        city_id,
                        country,
                        city,
                        state
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       city_id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->city_id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->country = $dataRow['country'];
            $this->city = $dataRow['city'];
            $this->state = $dataRow['state'];
            
        }        

        // UPDATE
        public function update_form(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        country = :country,
                        city = :city,
                        state = :state
                    WHERE 
                        city_id = :city_id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->country=htmlspecialchars(strip_tags($this->country));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->state=htmlspecialchars(strip_tags($this->state));
            $this->city_id=htmlspecialchars(strip_tags($this->city_id));
        
            // bind data
            $stmt->bindParam(":country", $this->country);
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":state", $this->state);
            $stmt->bindParam(":city_id", $this->city_id);
 
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE
        function delete_form(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE city_id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->city_id=htmlspecialchars(strip_tags($this->city_id));
        
            $stmt->bindParam(1, $this->city_id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>