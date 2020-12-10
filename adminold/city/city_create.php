<?php
// print_r($_POST);
// var_dump($_POST);
// $encodedJSON = json_encode($name, JSON_PRETTY_PRINT);

// print($encodedJSON);

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 $d = $_POST;
    include_once 'config/database.php';
    include_once 'class/city_function.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Form($db);

    $data = json_decode(file_get_contents("php://input"));
    $item->country = $d["country"]; 
    $item->state = $d["state"];
    $item->city = $d["city"];

    // $item->name = $data->name;
// 	echo $data->name;
    // $item->email = $data->email;
    // $item->age = $data->age;
    // $item->designation = $data->designation;
    // $item->created = date('Y-m-d H:i:s');
    
    if($item->create_form()){
        // echo 'Employee created successfully.';
        header("Location: city.php");
    } else{
        echo 'Employee could not be created.';
    }
?>