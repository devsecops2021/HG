<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
      	include '../config.php';
    // include_once 'class/fetchdata_function.php';
     class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "todays_trasaction";

        // Columns
 

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        
        	

       
// SELECT 	user_id,mtcn,transaction_Code,Date,Commision_Charges,Amount,Discount,Total
            // FROM todays_trasaction   // GET ALL
        public function get_form(){
            $sqlQuery = "SELECT li_id,user_id,mtcn,transaction_Code,Date,Commision_Charges,Amount,Discount,Total FROM " . $this->db_table . " ORDER BY li_id DESC";
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
                "transaction_Code" => $transaction_Code,
                "Date" => $Date,
                "Commision_Charges" => $Commision_Charges,
                "Amount" => $Amount,
                "Discount" => $Discount,
                "Total" => $Total
               
                
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