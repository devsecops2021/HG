<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

   include_once '../config.php';
    include_once 'agent_function.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $item->bt_id = isset($_GET['bt_id']) ? $_GET['bt_id'] : die();
  
    $item->get_single_form();

    if($item->agent_name != null){
        // create array
        $emp_arr = array(
            "bt_id" =>  $item->bt_id,
            "agent_name" => $item->agent_name,
            "deposit_amount" => $item->deposit_amount,
             "conversion_amount" => $item->conversion_amount,
            "transaction_no" => $item->transaction_no,
            "transaction_date" => $item->transaction_date,
             "account_no" => $item->account_no,
            "user_id" => $item->user_id,
           
            
              );
    
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Employee not found.");
    }
?>