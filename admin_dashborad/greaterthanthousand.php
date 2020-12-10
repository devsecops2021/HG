<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
      	include '../config.php';
    // include_once 'class/fetchdata_function.php';
     class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "vtrans_count_greaterthan_thousand";

        // Columns
 

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        
        	

       
// select sender_name As Sender_Name , li_id AS Transactions_id ,amount_to_send AS Transaction_Total FROM line_items 
// WHERE MONTH(transf_submit_date) = MONTH(CURRENT_TIMESTAMP) AND YEAR(transf_submit_date) = YEAR(CURRENT_TIMESTAMP) && amount_to_send>1000 AND watch_list = 1
        public function get_form(){
            $sqlQuery = "SELECT Sender_Name ,Transactions_id ,Transaction_Total,watch_list,Watch,transaction_count
            FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
    }
    
    $database = new Database();
    $db = $database->getConnection();

    $items = new Form($db);

    $stmt = $items->get_form();
    $itemCount = $stmt->rowCount();


    // echo json_encode($itemCount);

    if($itemCount > 0){
        
        $employeeArr = array();
        // $employeeArr["body"] = array();
        // $employeeArr["itemCount"] = $itemCount;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
           
            extract($row);
            $e = array(
                "Sender_Name" => $Sender_Name,
                "Transactions_id" => $Transactions_id,
                "Transaction_Total" => $Transaction_Total,
                "watch_list" => $watch_list,
                "Watch"=>$Watch,
                "transaction_count"=>$transaction_count,
               
                
            );

            array_push($employeeArr, $e);
            // array_push($json_array,$row);
        }
        echo json_encode($employeeArr);
    }

    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
?>