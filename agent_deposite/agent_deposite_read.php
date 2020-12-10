<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
     include_once '../config.php';
    include_once 'agent_function.php';
    
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
                "bt_id" => $bt_id,
                "agent_name" => $agent_name,
                "deposit_amount" => $deposit_amount,
                "conversion_amount" => $conversion_amount,
                "transaction_no" => $transaction_no,
                "transaction_date" => $transaction_date,
                "account_no" =>$account_no,
                "user_id"=>$user_id
                
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