<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

     include_once '../config.php';
    // include_once 'class/fetchdata_function.php';
    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "line_items";

   

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

// SELECT COUNT(li_id) AS count1 FROM line_items          WHERE                     transf_submit_date >= CURRENT_DATE AND
                    //   user_id = 37 AND approval_status IN(0,1)
       public function get_single_form(){
            $sqlQuery = "SELECT
                        COUNT(li_id) AS count1
                      FROM
                        ". $this->db_table ."
                    WHERE 
                     trans_send_date >= CURRENT_DATE AND
                       send_agent_id = ? AND approval_status IN(0,1)
                    ";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->user_id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->count1 = $dataRow['count1'];
            
        }


    }

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $item->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();
  
    $item->get_single_form();

    if($item->user_id != null){
        // create array
        $emp_arr = array(
            "user_id" =>  $item->user_id,
            // "count" => $item->count
            "count1" => $item->count1
            
              );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("user not found.");
    }
?>