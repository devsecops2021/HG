<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
      include_once '../config.php';
    // include_once 'class/fetchdata_function.php';
     class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "users_agent_db";

   

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

// select CONCAT('AG',LPAD(user_id,4,'0'),' - ',first_name,' ',last_name) AS 'User',country AS 'Location',role as 'Role' from users
        // GET ALL
        public function get_form(){
            $sqlQuery = "select User,Location,Role FROM " . $this->db_table . "";
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
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            extract($row);
            $e = array(
                "User" => $User,
                "Location" => $Location,
                "Role" => $Role
                
            );

            array_push($employeeArr, $e);
            
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