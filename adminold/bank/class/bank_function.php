<?php
    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "bank";

        // Columns
        public $bank_id;
        public $bank_name;
        public $branch_name;
        public $ro_name;
        public $address;
        //public $status;
       
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function get_form(){
            $sqlQuery = "SELECT bank_id, bank_name, branch_name, ro_name, address FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        
        	public function saveRecords($tbName,$u,$c,$s,$r)
	{
//	$conn=$this->connect();
// echo $u;
	mysqli_query($conn,"insert into $tbName values('".$u."','".$c."','".$s."','".$r."')");
	}

        // CREATE
        public function create_form(){
            
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        bank_name = :bank_name, 
                        ro_name = :ro_name,
                        address = :address,
                        branch_name = :branch_name";  
                         
        //                designation = :designation, 
        //                created = :created";
// echo $sqlQuery;
            $stmt = $this->conn->prepare($sqlQuery);
        

            // sanitize
            $this->bank_name=htmlspecialchars(strip_tags($this->bank_name));
            $this->branch_name=htmlspecialchars(strip_tags($this->branch_name));
            $this->ro_name=htmlspecialchars(strip_tags($this->ro_name));
            $this->address=htmlspecialchars(strip_tags($this->address));
           
            // bind data
            $stmt->bindParam(":bank_name", $this->bank_name);
            $stmt->bindParam(":branch_name", $this->branch_name);
            $stmt->bindParam(":ro_name", $this->ro_name);
            $stmt->bindParam(":address", $this->address);
                           if($stmt->execute()){
               return true;
            }
            return false;

        }

        // READ single
        public function get_single_form(){
            $sqlQuery = "SELECT
                        bank_id,
                        bank_name,
                        branch_name,
                        ro_name,
                        address
                        
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       bank_id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->bank_id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->bank_name = $dataRow['bank_name'];
            $this->branch_name = $dataRow['branch_name'];
            $this->ro_name = $dataRow['ro_name'];
            $this->address = $dataRow['address'];
            
        }        

        // UPDATE
        public function update_form(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        bank_name = :bank_name,
                        branch_name = :branch_name,
                        address = :address,
                        ro_name = :ro_name
                    WHERE 
                        bank_id = :bank_id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->bank_name=htmlspecialchars(strip_tags($this->bank_name));
            $this->branch_name=htmlspecialchars(strip_tags($this->branch_name));
            $this->ro_name=htmlspecialchars(strip_tags($this->ro_name));
             $this->address=htmlspecialchars(strip_tags($this->address));
            $this->bank_id=htmlspecialchars(strip_tags($this->bank_id));
        
            // bind data
            $stmt->bindParam(":bank_name", $this->bank_name);
            $stmt->bindParam(":branch_name", $this->branch_name);
            $stmt->bindParam(":ro_name", $this->ro_name);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":bank_id", $this->bank_id);
 
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE
        function delete_form(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE bank_id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->bank_id=htmlspecialchars(strip_tags($this->bank_id));
        
            $stmt->bindParam(1, $this->bank_id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>