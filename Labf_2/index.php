<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0px; padding: 0px; }
        header, footer { border: 1px solid #000; padding: 10px; text-align: center; }
        nav { float: right; }
        nav a { color: blue; text-decoration: none; margin: 0 5px; }
        nav a:hover { text-decoration: underline; }
        .logo { float: left; font-size: 20px; font-weight: bold; }
        .logo span { color: green; }
        .welcome { text-align: left; padding: 10px; margin: 70px 0; font-size: 22px; font-weight: bold; }
        footer { clear: both; margin-top: 50px; }
    </style>
</head>
<body>
    <header>
        <div class="logo"><span>X</span>Company</div>
        <nav>
            <a href="index.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="registration.php">Registration</a>
        </nav>
    </header>

    <div class="welcome">Welcome to xCompany</div>

    <footer>
        Copyright © 2017
    </footer>
</body>
</html>
