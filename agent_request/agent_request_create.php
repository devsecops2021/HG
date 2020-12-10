<?php
// print_r($_POST);
// var_dump($_POST);
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    $d = $_POST;
    
      include_once '../config.php';
    include_once 'class/agent_request_function.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

   $item->agent_name = $d["agent_name"];
   $item->created_by = $d["created_by"];
  $item->request_amount = $d["request_amount"];
    $item->conversion_amount_agent = $d["conversion_amount_agent"]; 
    $item->request_date = $d["request_date"];
    $item->agent_id = $d["agent_id"];
  
    // exit();
    if($item->create_form()){
      
        header("Location: agent_request_show.php");
    } else{
        echo 'form could not be created.';
    }
?>