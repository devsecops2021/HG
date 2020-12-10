<?php
// print_r($_POST);
// var_dump($_POST);
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

   $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    $d = $_POST;
 

    include_once '../../database.php';
    include_once 'class/customer_function.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $item->first_name = $d["first_name"];
    $item->middle_name = $d["middle_name"];
   $item->last_name = $d["last_name"];
  $item->company_name = $d["company_name"];
    $item->title = $d["title"]; 
    $item->phone = $d["phone"]; 
  $item->cell_phone = $d["cell_phone"]; 
    $item->home_phone = $d["home_phone"]; 
  $item->email_id = $d["email_id"];
    $item->address = $d["address"]; 
    $item->apt_suite = $d["apt_suite"];
  $item->country = $d["country"];
  $item->state = $d["state"]; 
    $item->city = $d["city"]; 
  $item->zip_postcode = $d["zip_postcode"];
  
  $item->id_type = $d["id_type"]; 
  $item->id_number = $d["id_number"];
    $item->issued_by = $d["issued_by"]; 
    $item->issue_date = $d["issue_date"];
  $item->exp_date = $d["exp_date"];
  $item->birthday = $d["birthday"]; 
    $item->secondary_id = $d["secondary_id"]; 
    $item->sec_id_number = $d["sec_id_number"];
    $item->image = $image;
  $item->birth_country = $d["birth_country"];
  $item->citizenship = $d["citizenship"]; 
  $item->comments = $d["comments"];
    // echo $item->image;
    // exit();
    if($item->create_form()){
        // echo 'Client created successfully.';
        header("Location: customer_show_theme1.php");
    } else{
        echo 'Client could not be created.';
    }
?>