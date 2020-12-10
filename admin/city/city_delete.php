<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    $d = $_POST;

    include_once '../../database.php';
    include_once 'class/city_function.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    $item = new Form($db);
    
    // $data = json_decode(file_get_contents("php://input"));
    
    $item->city_id = $d[city_id];
    
    if($item->delete_form()){
        // echo json_encode("Employee deleted.");
        header("Location: city.php");
    } else{
        echo json_encode("Data could not be deleted");
    }
?>