<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
      	include '../config.php';
     class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "line_items";

        // Columns
 

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        
        	
// " . $this->db_table . "
       
// SELECT li_id,send_agent_id,mtcn,date_format(line_items.trans_send_date,'%m-%e-%Y') as 'date',amt_to_send,comm_charges,discount,(line_items.amt_to_send+line_items.comm_charges-line_items.discount) as  'received_amount'
// FROM line_items
// WHERE trans_send_date >= CURRENT_DATE AND approval_status IN(0,1)
//              ORDER by li_id DESC
        public function get_form(){
            $sqlQuery = "SELECT li_id,send_agent_id,mtcn,date_format(trans_send_date,'%m-%e-%Y') as date_time,amt_to_send,round((amt_to_send*comm_percentage/100),2) AS comm_charges,round((amt_to_send*discount/100),2) AS discount,(amt_to_send+comm_charges) as received_amount FROM " . $this->db_table . " WHERE trans_send_date >= CURRENT_DATE AND approval_status IN(0,1) ORDER by li_id DESC ";
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
                "user_id" => $user_id,
                  "li_id"=>$li_id,
                "mtcn" => $mtcn,
                "date_time" => $date_time,
                "amt_to_send" => $amt_to_send,
                "comm_charges" => $comm_charges,
                "discount" => $discount,
                "received_amount" => $received_amount
               
                
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