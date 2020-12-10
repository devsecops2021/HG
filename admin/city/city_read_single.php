<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../../database.php';
    include_once 'class/city_function.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $item->city_id = isset($_GET['city_id']) ? $_GET['city_id'] : die();
  
    $item->get_single_form();

    if($item->city_id != null){
        // create array
        $emp_arr = array(
            "city_id" =>  $item->city_id,
            "country" => $item->country,
            "state" => $item->state,
             "city" => $item->city
            // "address" => $item->address
            
        );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Employee not found.");
    }
?>