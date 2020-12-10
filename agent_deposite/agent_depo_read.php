<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config.php';

    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "vagent_bank_transfer_to_ro";

   

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

// select sender_name As Sender_Name , li_id AS Transactions_id ,amount_to_send AS Transaction_Total
//             FROM line_items
//             WHERE MONTH(transf_submit_date) = MONTH(CURRENT_TIMESTAMP) AND YEAR(transf_submit_date) = YEAR(CURRENT_TIMESTAMP) && amount_to_send>1000 AND user_id = 37
       public function get_single_form(){
           $sqlQuery = "SELECT *
                        
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       user_id = ?  ORDER by bt_id DESC
                    ";
            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->user_id);

            $stmt->execute();
           return $stmt;
 
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            // $this->transaction_status = $dataRow['transaction_status'];
            // $this->deposit_amount = $dataRow['deposit_amount'];
            // $this->Approval_Status = $dataRow['Approval_Status'];
            // $this->Approved_By = $dataRow['Approved_By'];
            // $this->Approved_Date = $dataRow['Approved_Date'];
            $this->agent_name = $dataRow['agent_name'];
            $this->deposit_amount = $dataRow['deposit_amount'];
            $this->transaction_no = $dataRow['transaction_no'];
            $this->transaction_date = $dataRow['transaction_date'];
            $this->conversion_amount = $dataRow['conversion_amount'];
           $this->Approved_By = $dataRow['Approved_By']; 
           $this->Approved_Date = $dataRow['Approved_Date'];
           $this->approval_status = $dataRow['Approval_Status'];
           
           
            
           
        }


    }

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $item->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();
  
    
    $stmt = $item->get_single_form();
    $itemCount = $stmt->rowCount();

if($itemCount > 0){
        
        $employeeArr = array();
        
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    
extract($row);
            $emp_arr = array(
                // "transaction_status" => $transaction_status,
                // "deposit_amount" => $deposit_amount,
                // "Approval_Status" => $Approval_Status,
                // "Approved_By" => $Approved_By,
                // "Approved_Date" => $Approved_Date
                "agent_name" => $agent_name,
                "transaction_no" => $transaction_no,
                "transaction_status" => $transaction_status,
                "transaction_date" => $transaction_date,
                "deposit_amount" => $deposit_amount,
                "Approved_By" => $Approved_By,
                "Approved_Date" => $Approved_Date,
                "Approval_Status" => $Approval_Status
                
                
                
                
);
      array_push($employeeArr, $emp_arr);
    
}
        http_response_code(200);
        echo json_encode($employeeArr);
   
}  
    else{
        http_response_code(404);
        echo json_encode("user not found.");
    }
?>