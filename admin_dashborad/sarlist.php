<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
      	include '../config.php';
    // include_once 'class/fetchdata_function.php';
     class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "vsuspicious_queue";

        // Columns
 

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        
        	

       
// select sender_name As Sender_Name , li_id AS Transactions_id ,amount_to_send AS Transaction_Total FROM line_items 
// WHERE MONTH(transf_submit_date) = MONTH(CURRENT_TIMESTAMP) AND YEAR(transf_submit_date) = YEAR(CURRENT_TIMESTAMP) && amount_to_send>1000 AND watch_list = 1
        public function get_form(){
            $sqlQuery = "SELECT *
            FROM " . $this->db_table . "  ORDER by suspicious_queue_id DESC
            ";
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
               "c_id" => $c_id,
               "li_id" => $li_id,
                "user_id" => $user_id,
                "reason"=>$reason,
                "Date" => $Date,
                "risk_level" => $risk_level,
                "description" => $description,
                "user_name"=>$user_name,
                "mtcn"=>$mtcn
               
                
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