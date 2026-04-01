<?php

$name = "Atharva";
$age = 20;
$num = 1234567.89;

// HTML formatting
echo "<h2>PHP Output Formatting</h2>";
echo "<b>Name:</b> $name <br>";

// Line break
echo "Age: $age<br><br>";

// printf
printf("Formatted: My name is %s and I am %d years old<br><br>", $name, $age);

// Number format
echo "Formatted Number: " . number_format($num) . "<br><br>";

// nl2br
$text = "Hello\nWorld";
echo nl2br($text) . "<br><br>";

// htmlspecialchars
$unsafe = "<script>alert('Hack');</script>";
echo htmlspecialchars($unsafe) . "<br><br>";

// Array output
$arr = array("Apple", "Banana");
print_r($arr);
echo "<br>";
var_dump($arr);

?>