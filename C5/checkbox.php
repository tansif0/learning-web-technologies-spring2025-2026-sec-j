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
        <input type="checkbox" name="degree[]" value="SSC"
            <?php if(isset($_POST['degree']) && in_array("SSC", $_POST['degree'])) echo "checked"; ?>> SSC
        <input type="checkbox" name="degree[]" value="HSC"
            <?php if(isset($_POST['degree']) && in_array("HSC", $_POST['degree'])) echo "checked"; ?>> HSC
        <input type="checkbox" name="degree[]" value="BSc"
            <?php if(isset($_POST['degree']) && in_array("BSc", $_POST['degree'])) echo "checked"; ?>> BSc
        <input type="checkbox" name="degree[]" value="MSc"
            <?php if(isset($_POST['degree']) && in_array("MSc", $_POST['degree'])) echo "checked"; ?>> MSc
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>