<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once 'config/database.php';
    include_once 'class/bank_function.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $item->bank_id = isset($_GET['bank_id']) ? $_GET['bank_id'] : die();
  
    $item->get_single_form();

    if($item->bank_id != null){
        // create array
        $emp_arr = array(
            "bank_id" =>  $item->bank_id,
            "bank_name" => $item->bank_name,
            "ro_name" => $item->ro_name,
             "branch_name" => $item->branch_name,
            "address" => $item->address
            
        );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Employee not found.");
    }
?>