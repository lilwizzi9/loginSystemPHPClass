<?php 
header('Content-Type: application/json; charset=utf-8');
$response = [
    "result"=>false,
    "message"=>null,
    "data"=>null
];

$data = json_decode(file_get_contents('php://input'),true);
//is valid
if($data){
    $username = isset($data["username"]) ? $data["username"]: null;
    $password = isset($data["password"]) ? $data["password"]: null;
    if($username && $password){
        
    }
}

print(json_encode($response));


?>