<?php

$username = "admin";
$password = "1234";

if($_POST['user'] == $username && $_POST['pass'] == $password){
    echo "Login Successful";
} else {
    echo "Invalid Credentials";
}

?>