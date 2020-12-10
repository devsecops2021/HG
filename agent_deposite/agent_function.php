<?php
    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "agent_bank_transfer_to_ro";

        // Columns
 public $agent_name;
 public $deposit_amount;
 public $conversion_amount;
 public $transaction_no;
 public $account_no;
 public $transaction_date;
 public $document_1; 
 public $user_id;
 public $transaction_type;
 public $created_by;


        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        
        	public function saveRecords($tbName,$u,$p,$l)
	{
	mysqli_query($conn,"insert into $tbName values('".$u."','".$p."','".$l."')");
	}

        // CREATE
        public function create_form(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        agent_name = :agent_name,
                        deposit_amount = :deposit_amount,
                        conversion_amount = :conversion_amount,
                        transaction_no = :transaction_no,
                        account_no = :account_no,
                        transaction_date = :transaction_date,
                        user_id =:user_id,
                        transaction_type =:transaction_type,
                        ro_id =:created_by,
                        document_1=:document_1
                        
                        ";
                    //   approved_by =:ro_id, 
// echo $sqlQuery;
            $stmt = $this->conn->prepare($sqlQuery);
        

            // sanitize
            $this->agent_name=htmlspecialchars(strip_tags($this->agent_name));
            $this->deposit_amount=htmlspecialchars(strip_tags($this->deposit_amount));
            $this->conversion_amount=htmlspecialchars(strip_tags($this->conversion_amount));
            $this->transaction_no=htmlspecialchars(strip_tags($this->transaction_no));
            $this->account_no=htmlspecialchars(strip_tags($this->account_no));
            $this->transaction_date=htmlspecialchars(strip_tags($this->transaction_date));
             $this->user_id=htmlspecialchars(strip_tags($this->user_id));
             $this->ro_id=htmlspecialchars(strip_tags($this->ro_id));
             $this->document_1=htmlspecialchars(strip_tags($this->document_1));
             $this->created_by=htmlspecialchars(strip_tags($this->created_by));
            
            $this->transaction_type=htmlspecialchars(strip_tags($this->transaction_type));
            
            
            // bind data
            $stmt->bindParam(":agent_name", $this->agent_name);
            $stmt->bindParam(":deposit_amount", $this->deposit_amount);
            $stmt->bindParam(":conversion_amount", $this->conversion_amount);
            $stmt->bindParam(":transaction_no", $this->transaction_no);
            $stmt->bindParam(":account_no", $this->account_no);
            $stmt->bindParam(":transaction_date", $this->transaction_date);
            $stmt->bindParam(":user_id", $this->user_id);
            //  $stmt->bindParam(":ro_id", $this->ro_id);
            $stmt->bindParam(":document_1", $this->document_1);
            $stmt->bindParam(":transaction_type", $this->transaction_type);
            $stmt->bindParam(":created_by", $this->created_by);
           
                            if($stmt->execute()){
               return true;
            }
            return false;

        }

   // GET ALL
        public function get_form(){
            $sqlQuery = "SELECT * FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // READ single
        public function get_single_form(){
            $sqlQuery = "SELECT *
                        
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       bt_id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->bt_id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->agent_name = $dataRow['agent_name'];
            $this->deposit_amount = $dataRow['deposit_amount'];
            $this->conversion_amount = $dataRow['conversion_amount'];
            $this->transaction_no = $dataRow['transaction_no'];
            $this->transaction_date = $dataRow['transaction_date'];
            $this->account_no = $dataRow['account_no'];
            $this->transaction_type = $dataRow['transaction_type'];
            $this->user_id = $dataRow['user_id'];
            $this->ro_id = $dataRow['ro_id'];
            
           
          
            
        }
    }
?>