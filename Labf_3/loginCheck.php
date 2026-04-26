<?php
session_start();

if(isset($_POST['login'])){

    $u = $_POST['username'];
    $p = $_POST['password'];

    if(!isset($_SESSION['users'])){
        echo "No users found!";
        exit();
    }

    $found = false;

    foreach($_SESSION['users'] as $user){
        if($user['username'] == $u && $user['password'] == $p){
            $found = true;
            break;
        }
    }

    if($found){
        $_SESSION['status'] = true;
        $_SESSION['username'] = $u;
        header("location: home.php");
    }else{
        echo "Invalid login!";
    }

}else{
    echo "Submit form!";
}
?>