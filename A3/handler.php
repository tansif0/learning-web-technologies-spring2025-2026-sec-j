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