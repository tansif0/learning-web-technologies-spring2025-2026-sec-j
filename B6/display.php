<?php
    if(isset($_POST['submit'])){
        $bg = $_POST['bloodgroup'];

        if($bg == ""){
            echo "Blood group cannot be empty!";
        } else {
            echo "Your blood group is: " . $bg;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group</title>
</head>
<body>
    <form method="post" action="">
        BLOOD GROUP:
        <select name="bloodgroup">
            <option value="">--Select--</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>