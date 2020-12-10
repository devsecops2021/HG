<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
       	include '../config.php';
    // include_once 'class/fetchdata_function.php';
     class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "vtransactiontotaltoday";

        // Columns
 

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        
        	

       
// SELECT SUM(amount_to_send) AS total_amount FROM `line_items` WHERE transf_submit_date >= CURRENT_DATE+" 00:00:00" concat('$',sum(`amount_to_send`))
        // GET ALL
        public function get_form(){
            $sqlQuery = "SELECT  total_amount FROM " . $this->db_table . "";
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
                "total_amount" => $total_amount
                // "first_name" => $first_name,
                // "middle_name" => $middle_name
                
            );
// echo $e;
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