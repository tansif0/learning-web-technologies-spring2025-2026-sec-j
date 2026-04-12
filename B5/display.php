<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['degree'])){
            echo "You selected: " . implode(", ", $_POST['degree']);
        } else {
            echo "No degree selected!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree</title>
</head>
<body>
    <form method="post" action="">
        DEGREE:
        <input type="checkbox" name="degree[]" value="SSC"> SSC
        <input type="checkbox" name="degree[]" value="HSC"> HSC
        <input type="checkbox" name="degree[]" value="BSc"> BSc
        <input type="checkbox" name="degree[]" value="MSc"> MSc
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>