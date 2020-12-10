<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
     include_once '../../database.php';
    include_once 'class/customer_function.php';
    
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
                "c_id" => $c_id,
                "first_name" => $first_name,
                "middle_name" => $middle_name,
                "last_name" => $last_name,
                "company_name" => $company_name,
                "title" => $title,
                "phone" => $phone,
                "ext" => $ext,
                "cell_phone" => $cell_phone,
                "home_phone" => $home_phone,
                "email_id" => $email_id,
                 "address" => $address,
                 "image" => $image,
                "country" => $country,
                "state" => $state
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