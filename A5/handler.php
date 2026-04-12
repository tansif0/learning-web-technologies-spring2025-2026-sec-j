<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['degree'])){
            echo "You selected: " . implode(", ", $_POST['degree']);
        } else {
            echo "No degree selected!";
        }
    }
?>