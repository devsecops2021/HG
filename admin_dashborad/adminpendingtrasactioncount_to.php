<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
      	include '../config.php';
    // include_once 'class/fetchdata_function.php';
     class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "vpending_trans_today_only";

        // Columns
 

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        
        	

       
// SELECT COUNT(li_id) AS count1 FROM line_items WHERE transf_submit_date >= CURRENT_DATE AND approval_status IN(0,1)
        // GET ALL
        public function get_form(){
            $sqlQuery = "SELECT  count1 FROM " . $this->db_table . "";
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
                "count1" => $count1
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