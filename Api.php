<?php 
// header('Content-Type: application/json; charset=utf-8');
// $response = array(
//     "result"=>false,
//     "message"=>"Failed",
//     "data"=>null
// );

// print(json_encode($response));
var_dump(file_get_contents('php://input'));

?>