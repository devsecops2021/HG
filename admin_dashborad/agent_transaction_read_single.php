<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

     	include '../config.php';
    // include_once 'class/agent_transaction_function.php';
    
    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "vagetransdetails";
         // Db connection
        public function __construct($db){
            $this->conn = $db;
        }


// READ single
        public function get_single_form(){
            $sqlQuery = "SELECT *
                        
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       li_id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->li_id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->mtcn = $dataRow['mtcn'];
            $this->sender_name = $dataRow['sender_name'];
            $this->phone = $dataRow['phone'];
            $this->city = $dataRow['city'];
            $this->from_agent = $dataRow['from_agent'];
            $this->address = $dataRow['address'];
            $this->id_type = $dataRow['id_type'];
            $this->id_number = $dataRow['id_number'];
            $this->issue_date = $dataRow['issue_date'];
            $this->exp_date = $dataRow['exp_date'];
            $this->dob = $dataRow['dob'];
            $this->image = $dataRow['image'];
            $this->sec_id_number = $dataRow['sec_id_number'];
            $this->secondary_id = $dataRow['secondary_id'];
            $this->second_idimg = $dataRow['second_idimg'];
            
            $this->date = $dataRow['date'];
            $this->to_agent = $dataRow['to_agent'];
            $this->receiver_name = $dataRow['receiver_name'];
            $this->cell_phone = $dataRow['cell_phone'];
            $this->amount = $dataRow['amount'];
            $this->paid_date = $dataRow['paid_date'];
            $this->beneficiary_city = $dataRow['beneficiary_city'];
            
            
            $this->send_amount = $dataRow['send_amount'];
            $this->receivable_amount = $dataRow['receivable_amount'];
            $this->commission_charges = $dataRow['commission_charges'];
            $this->current_status = $dataRow['current_status'];
            $this->approval_status = $dataRow['approval_status'];
            $this->comm_charges = $dataRow['comm_charges'];
            
            
            
            
        }

        

    }


    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $item->li_id = isset($_GET['li_id']) ? $_GET['li_id'] : die();
//   echo $item->li_id;
//   exit();
    $item->get_single_form();

    if($item->mtcn != null){
        // create array
        $emp_arr = array(
            "li_id" =>  $item->li_id,
            "mtcn" => $item->mtcn,
            "sender_name" => $item->sender_name,
            "phone" => $item->phone,
            "city" => $item->city,
            "from_agent" => $item->from_agent,
            "address" => $item->address,
             "id_type" => $item->id_type,
            "id_number" => $item->id_number,
            "issue_date" => $item->issue_date,
            "exp_date" =>  $item->exp_date,
            "dob" => $item->dob,
            "image"=>$item ->image,
             "sec_id_number" => $item->sec_id_number,
            "secondary_id" => $item->secondary_id,
            "second_idimg"=>$item ->second_idimg,
            
            
            "date" => $item->date,
            "to_agent" => $item->to_agent,
            "receiver_name" => $item->receiver_name,
            "cell_phone" => $item->cell_phone,
            "amount" =>  $item->amount,
            "paid_date" => $item->paid_date,
             "beneficiary_city" => $item->beneficiary_city,
             
            "send_amount" => $item->send_amount,
            "receivable_amount" => $item->receivable_amount,
            "commission_charges" => $item->commission_charges,
            "current_status" => $item->current_status,
            "approval_status" => $item->approval_status,
            
            
            "comm_charges" => $item->comm_charges,
            // "comments" => $item->comments,
            // "status"=>$item->status,
            
              );
    
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Employee not found.");
    }
?>