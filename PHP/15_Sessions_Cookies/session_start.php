<?php
session_start();

$_SESSION['user'] = "Atharva";
$_SESSION['role'] = "Developer";

echo "Session started and data stored";
?>