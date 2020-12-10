<?php
// print_r($_POST);
// var_dump($_POST);
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  $image_base64 = base64_encode(file_get_contents($_FILES['document_1']['tmp_name']) );
    $document_1 = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    
    
    $d = $_POST;
 

   include_once '../config.php';

    include_once 'agent_function.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

   $item->agent_name = $d["agent_name"];
  $item->deposit_amount = $d["deposit_amount"];
//   $item->ro_id = $d["ro_id"];
    $item->conversion_amount = $d["conversion_amount"]; 
    $item->transaction_no = $d["transaction_no"]; 
    $item->transaction_date = $d["transaction_date"];
  $item->account_no = $d["account_no"]; 
    $item->user_id = $d["user_id"];
    $item->created_by = $d["created_by"];
     $item->transaction_type = $d["transaction_type"];
    $item->document_1=$document_1;
  
    // exit();
    if($item->create_form()){
      
        header("Location: agent_deposite_home.php");
    } else{
        echo 'Client could not be created.';
    }
?>