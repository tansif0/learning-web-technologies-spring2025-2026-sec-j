<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['gender'])){
            echo "You selected: " . $_POST['gender'];
        } else {
            echo "No gender selected!";
        }
    }
?>