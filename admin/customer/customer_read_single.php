<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../../database.php';
    include_once 'class/customer_function.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $item->c_id = isset($_GET['c_id']) ? $_GET['c_id'] : die();
  
    $item->get_single_form();

    if($item->first_name != null){
        // create array
        $emp_arr = array(
            "c_id" =>  $item->c_id,
            "first_name" => $item->first_name,
            "middle_name" => $item->middle_name,
             "last_name" => $item->last_name,
            "company_name" => $item->company_name,
            "title" => $item->title,
            
            "phone" =>  $item->phone,
            "ext" => $item->ext,
            "cell_phone" => $item->cell_phone,
             "home_phone" => $item->home_phone,
            "email_id" => $item->email_id,
            "address" => $item->address,
            "apt_suite" => $item->apt_suite,
            "country" => $item->country,
            "state" => $item->state,
            
             "city" => $item->city,
            "zip_postcode" => $item->zip_postcode,
             "id_type" => $item->id_type,
            "id_number" => $item->id_number,
            "issued_by" => $item->issued_by,
            "issue_date" => $item->issue_date,
            "exp_date" =>  $item->exp_date,
            "birthday" => $item->birthday,
            "secondary_id" => $item->secondary_id,
             "sec_id_number" => $item->sec_id_number,
            "birth_country" => $item->birth_country,
            "image"=>$item ->image,
            "citizenship" => $item->citizenship,
            "comments" => $item->comments,
            
              );
    
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Employee not found.");
    }
?>