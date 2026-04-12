<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];

        if($name == ""){
            echo "null username!";
        } else {
            echo "Hello, " . $name . "!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name</title>
</head>
<body>
    <form method="post" action="">
        NAME: <input type="text" name="name" 
                     value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>"/> 
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>