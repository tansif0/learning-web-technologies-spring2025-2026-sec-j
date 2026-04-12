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
    <title>Gender Form</title>
</head>
<body>
    <form method="post" action="">
        GENDER:
        <input type="radio" name="gender" value="Male"
            <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="Female"
            <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="Other"
            <?php if(isset($_POST['gender']) && $_POST['gender']=="Other") echo "checked"; ?>> Other
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>