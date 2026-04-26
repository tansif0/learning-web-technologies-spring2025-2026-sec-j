<?php
session_start();

if(!isset($_SESSION['users'])){
    $_SESSION['users'] = [];
}

if(isset($_POST['signup'])){

    $u = $_POST['username'];
    $p = $_POST['password'];

    if($u == "" || $p == ""){
        echo "Empty fields!";
    }else{

        // save user
        $_SESSION['users'][] = [
            "username" => $u,
            "password" => $p
        ];

        echo "Signup successful! <a href='login.php'>Login</a>";
    }
}
?>