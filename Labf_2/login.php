<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header, footer { border: 1px solid #000; padding: 10px; text-align: center; }
        nav { float: right; }
        nav a { color: purple; text-decoration: none; margin: 0 5px; }
        nav a:hover { text-decoration: underline; }
        .logo { float: left; font-size: 20px; font-weight: bold; }
        .logo span { color: green; }
        .container { margin: 50px auto; width: 400px; }
        h3 { text-align: center; }
        label { display: inline-block; width: 120px; }
        input[type="text"], input[type="password"] {
            width: 200px; margin-bottom: 10px;
        }
        .remember { margin-top: 10px; }
        .buttons { text-align: center; margin-top: 20px; }
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

    <div class="container">
        <h3>LOGIN</h3>
        <form method="post" action="loginHandler.php">
            <label>User Name:</label><input type="text" name="username"><br>
            <label>Password:</label><input type="password" name="password"><br>

            <div class="remember">
                <input type="checkbox" name="remember"> Remember Me
            </div>

            <div class="buttons">
                <input type="submit" value="Submit">
                <a href="forgotPassword.php">Forgot Password?</a>
            </div>
        </form>
    </div>

    <footer>
        Copyright © 2017
    </footer>
</body>
</html>
