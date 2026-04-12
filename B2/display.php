<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];

        if($email == ""){
            echo "null email!";
        } else {
            echo "Your email is: " . $email;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email</title>
</head>
<body>
    <form method="post" action="">
        EMAIL: <input type="text" name="email"/> 
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>