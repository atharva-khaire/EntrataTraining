<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validation
    if(empty($name)){
        echo "Name is required<br>";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid Email<br>";
    } else {
        echo "Valid Data Submitted<br>";
    }
}

?>