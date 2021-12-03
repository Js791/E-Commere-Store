<?php
//remember, API endpoints should only echo/output precisely what you want returned
//any other unexpected characters can break the handling of the response
$response = ["message" => "There was a problem adding your item to cart"];
http_response_code(400);
error_log("req: " . var_export($_POST, true));
if (isset($_POST["product_id"]) && isset($_POST["quantity"])) {
    require_once(__DIR__ . "/../../../lib/functions.php");
    session_start();
    $user_id = get_user_id();
    $product_id = (int)se($_POST,'product_id',0,false);
    $quantity = (int)se($_POST,'quantity',0,false);
    $errors = [];
    $valid = true;

    if($quantity<0)
    {
        array_push($errors, "Invalid quantity");
        $valid = false;
    }

    if($user_id <= 0)
    {
        array_push($errors, "Invalid user");
        $valid = false;
    }

    $db = getDB();
    $stmt = $db->prepare("SELECT name,unit_price FROM Products where id = :id");
    $name = "";
    try 
    {
        $stmt->execute([":id" => $product_id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) 
        {
            $cost = (int)se($r, "cost", 0, false);
            $name = se($r, "name", "", false);
        }
    }
        catch (PDOException $e) 
        {
            error_log("Error getting cost of $product_id: " . var_export($e->errorInfo, true));
            $isValid = false;
        }

        if($valid)
        {
            add_item($product_id, $user_id, $quantity);
            http_response_code(200);
        }

        else 
        {
            $response["message"] = join("<br>", $errors);
        }

}
echo json_encode($response);