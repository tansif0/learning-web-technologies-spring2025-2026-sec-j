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
            <option value="A+" <?php if(isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="A+") echo "selected"; ?>>A+</option>
            <option value="A-" <?php if(isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="A-") echo "selected"; ?>>A-</option>
            <option value="B+" <?php if(isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="B+") echo "selected"; ?>>B+</option>
            <option value="B-" <?php if(isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="B-") echo "selected"; ?>>B-</option>
            <option value="O+" <?php if(isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="O+") echo "selected"; ?>>O+</option>
            <option value="O-" <?php if(isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="O-") echo "selected"; ?>>O-</option>
            <option value="AB+" <?php if(isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="AB+") echo "selected"; ?>>AB+</option>
            <option value="AB-" <?php if(isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="AB-") echo "selected"; ?>>AB-</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>