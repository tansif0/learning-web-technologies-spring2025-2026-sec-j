<?php
    if(isset($_POST['submit'])){
        $dd = $_POST['dd'];
        $mm = $_POST['mm'];
        $yyyy = $_POST['yyyy'];

        if($dd == "" || $mm == "" || $yyyy == ""){
            echo "Empty Date of Birth!";
        } else {
            echo "Your Date of Birth is: $dd/$mm/$yyyy";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Date of Birth</title>
</head>
<body>
    <form method="post" action="">
        DATE OF BIRTH: 
        <input type="text" name="dd" size="2"/> /
        <input type="text" name="mm" size="2"/> /
        <input type="text" name="yyyy" size="4"/>
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>