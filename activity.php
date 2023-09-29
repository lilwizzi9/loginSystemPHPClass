<?php

// Connect To DB
// mysql connection object
$_host = "127.0.0.1";
$_password = "";
$_username = "root";
$_database = "loginsystem";

$conn=new mysqli(
    $_host,$_username,$_password,$_database
);

$connection = new PDO(
    "mysql:host=$_host;dbname=$_database",
    $_username,
    $_password
);

$connection->query("INSERT INTO `users`
( `username`, `useremail`, `password`, `image`) VALUES 
('FannyMan','FannyMan@gml.com','12345','imgs/a.png')");
// if($conn->connect_error){
//     exit("Error Connecting");
// }
// print("Connected..<br>");
// // Exec Query (SQL)
// //Create
// $query = ;
// $conn->query($query);
//Update
//Read
//Del


?>