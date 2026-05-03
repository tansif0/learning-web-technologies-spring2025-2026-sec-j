<?php
header('Content-Type: application/json');

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == ""){
    echo json_encode(["status"=>"error", "message"=>"Signup failed: username or password empty!"]);
} else {
    echo json_encode(["status"=>"success", "message"=>"Signup successful for user: ".$username]);
}
?>
