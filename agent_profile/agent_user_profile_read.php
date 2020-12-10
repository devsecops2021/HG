<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once 'config/database.php';
    // include_once 'class/fetchdata_function.php';
    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "vagentprofile";

   

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }


// SELECT li_id,mt_id,mtcn,user_id,c_id,sender_name,destination_country,amount_to_send,date_time, receiver_name,receiver_relationship,purpose,approval_status FROM line_items WHERE li_id = 371 AND approval_status IN(0,1)
       public function get_single_form(){
            $sqlQuery = "SELECT *
                      FROM
                        ". $this->db_table ."
                    WHERE 
                   
                       user_id = ? 
                    ";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->user_id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
             $this->first_name = $dataRow['first_name'];
            $this->last_name = $dataRow['last_name'];
            $this->department_name = $dataRow['department_name'];
             $this->date_of_joining = $dataRow['date_of_joining'];
            $this->approval_limit = $dataRow['approval_limit'];
            $this->sender_percentage = $dataRow['sender_percentage'];
            $this->receiver_percentage = $dataRow['receiver_percentage'];
            $this->location = $dataRow['location'];
            
              $this->permanent_address = $dataRow['permanent_address'];
            $this->country_code = $dataRow['country_code'];
            $this->country = $dataRow['country'];
            $this->city = $dataRow['city'];
            $this->mobile_number = $dataRow['mobile_number'];
            $this->email_id = $dataRow['email_id'];
            $this->alternate_email_id = $dataRow['alternate_email_id'];
            $this->emergency_name = $dataRow['emergency_name'];
            $this->emergency_number = $dataRow['emergency_number'];
            $this->ro_name = $dataRow['ro_name'];
       

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
            "first_name" =>  $item->first_name,
            "last_name" =>  $item->last_name,
            "department_name" =>  $item->department_name,
            "date_of_joining" =>  $item->date_of_joining,
            "approval_limit" => $item->approval_limit,
            "sender_percentage" => $item->sender_percentage,
            "receiver_percentage" => $item->receiver_percentage,
            "location1" => $item->location,
            "permanent_address" => $item->permanent_address,
            "country_code" => $item->country_code,
            "country" => $item->country,
            "city" => $item->city,
            "mobile_number" => $item->mobile_number,
            "email_id" => $item->email_id,
            "alternate_email_id" => $item->alternate_email_id,
            "emergency_name" => $item->emergency_name,
            "emergency_number" => $item->emergency_number,
            "ro_name"=> $item->ro_name,
           
);
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Recoard not found.");
    }
?>