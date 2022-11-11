<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include_once '/home/public_html/database/database.php';
include_once '/home/public_html/class/Books.php';
 
$database = new Database();
$db = $database->getConnection();
 
$items = new Books($db);
 
// $data = json_decode(file_get_contents("php://input"));
$id = $_GET['id'];

if(!empty($id)) {
	$items->id = $id;
	if($items->delete()){    
		http_response_code(200); 
		echo json_encode(array("message" => "Item was deleted."));
	} else {    
		http_response_code(503);   
		echo json_encode(array("message" => "Unable to delete item."));
	}
} else {
	http_response_code(400);    
    echo json_encode(array("message" => "Unable to delete items. Data is incomplete."));
}
