<?php
session_start();

echo "User: " . $_SESSION['user'] . "<br>";
echo "Role: " . $_SESSION['role'];
?>