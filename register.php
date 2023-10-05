<?php
include_once(__DIR__."/views/header.html");
include_once(__DIR__."/views/signup.html");


var_dump($_POST);
if(!isset($_POST["submit"])){
    exit();
}

// Reg
include_once(__DIR__."/includes/conn.php");
include_once(__DIR__."/includes/lib.php");
//collect
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];
$password = $_POST["password"];
//Validate aa@aa.com REGEX
        //response
//add to DB

$query = "INSERT INTO `users` (`username`, `useremail`, `password`)
         VALUES (?,?,?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sss",$username,$email,$password);
$stmt->execute();
var_dump($stmt);
//Respond
print("Added");


?>