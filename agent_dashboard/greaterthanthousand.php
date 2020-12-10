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
        private $db_table = "vtrans_count_greaterthan_thousand";

   

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

// select sender_name As Sender_Name , li_id AS Transactions_id ,amount_to_send AS Transaction_Total
//             FROM line_items
//             WHERE MONTH(transf_submit_date) = MONTH(CURRENT_TIMESTAMP) AND YEAR(transf_submit_date) = YEAR(CURRENT_TIMESTAMP) && amount_to_send>1000 AND user_id = 37
       public function get_single_form(){
           $sqlQuery = "select Sender_Name ,Transactions_id ,Transaction_Total,watch_list,Watch,transaction_count
            FROM " . $this->db_table . "
            WHERE  send_agent_id = ?
                       
                    ";
            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->user_id);

            $stmt->execute();
           return $stmt;
 
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->user_id = $dataRow['user_id'];
            $this->Sender_Name = $dataRow['Sender_Name'];
            $this->Transactions_id = $dataRow['Transactions_id'];
            $this->Transaction_Total = $dataRow['Transaction_Total'];
             $this->watch_list = $dataRow['watch_list'];
             $this->Watch = $dataRow['Watch'];
             $this->transaction_count = $dataRow['transaction_count'];
           
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
                
                "Sender_Name" => $Sender_Name,
                "Transactions_id" => $Transactions_id,
                "Transaction_Total" => $Transaction_Total,
                "watch_list" =>$watch_list,
                "Watch"=>$Watch,
                "transaction_count"=>$transaction_count,
                
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