<?php
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];

        if($name == ""){
            echo "null username!";
        } else {
            echo "Hello, " . $name . "!";
        }
    }

