<?php


    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 $d = $_POST;
    include_once '../../database.php';
    include_once 'class/bank_function.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $data = json_decode(file_get_contents("php://input"));
    $item->bank_name = $d["bank_name"]; 
    $item->branch_name = $d["branch_name"];
    $item->ro_name = $d["ro_name"];
    $item->address = $d["address"];

    
    if($item->create_form()){
        header("Location: bank.php");

    } else{
        echo 'Employee could not be created.';
    }
?>