<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['gender'])){
            echo "You selected: " . $_POST['gender'];
        } else {
            echo "No gender selected!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender</title>
</head>
<body>
    <form method="post" action="">
        GENDER:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>