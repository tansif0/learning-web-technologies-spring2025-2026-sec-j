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