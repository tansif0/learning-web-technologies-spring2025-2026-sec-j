<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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
        input[type="text"], input[type="password"], input[type="email"] {
            width: 200px; margin-bottom: 10px;
        }
        .gender, .dob { margin-top: 10px; }
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
        <h3>REGISTRATION</h3>
        <form method="post" action="registrationHandler.php">
            <label>Name:</label><input type="text" name="name"><br>
            <label>Email:</label><input type="email" name="email"><br>
            <label>User Name:</label><input type="text" name="username"><br>
            <label>Password:</label><input type="password" name="password"><br>
            <label>Confirm Password:</label><input type="password" name="confirm"><br>

            <div class="gender">
                <label>Gender:</label>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
            </div>

            <div class="dob">
                <label>Date of Birth:</label>
                <input type="text" name="day" size="2"> /
                <input type="text" name="month" size="2"> /
                <input type="text" name="year" size="4"> (dd/mm/yyyy)
            </div>

            <div class="buttons">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>

    <footer>
        Copyright © 2017
    </footer>
</body>
</html>
