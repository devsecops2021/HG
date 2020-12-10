<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
     include_once '../../database.php';
    include_once 'class/city_function.php';
    
    $database = new Database();
    $db = $database->getConnection();

    $items = new Form($db);

    $stmt = $items->get_form();
    $itemCount = $stmt->rowCount();


    // echo json_encode($itemCount);

    if($itemCount > 0){
        
        $employeeArr = array();
        // $employeeArr["body"] = array();
        // $employeeArr["itemCount"] = $itemCount;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            extract($row);
            $e = array(
                "city_id" => $city_id,
                "country" => $country,
                "state" => $state,
                "city" => $city
                // "address" => $address
             
            );
// echo $e;
            array_push($employeeArr, $e);
            // array_push($json_array,$row);
        }
        echo json_encode($employeeArr);
    }

    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
?>