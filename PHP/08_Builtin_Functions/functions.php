<?php

echo "<h2>PHP Built-in Functions Demo</h2>";

// 🔹 1. String Functions
echo "<h3>String Functions</h3>";
echo "Length: " . strlen("Hello") . "<br>";
echo "Reverse: " . strrev("Hello") . "<br>";
echo "Uppercase: " . strtoupper("hello") . "<br>";
echo "Lowercase: " . strtolower("HELLO") . "<br><br>";


// 🔹 2. Math Functions
echo "<h3>Math Functions</h3>";
echo "Max: " . max(10, 20, 30) . "<br>";
echo "Min: " . min(10, 20, 30) . "<br>";
echo "Square Root: " . sqrt(16) . "<br>";
echo "Random: " . rand(1, 100) . "<br><br>";


// 🔹 3. Array Functions
echo "<h3>Array Functions</h3>";
$arr = array(3, 1, 2);

sort($arr);
echo "Sorted Array: ";
print_r($arr);
echo "<br>";

echo "Count: " . count($arr) . "<br><br>";


// 🔹 4. Date & Time Functions
echo "<h3>Date & Time</h3>";
echo "Current Date: " . date("Y-m-d") . "<br>";
echo "Timestamp: " . time() . "<br><br>";


// 🔹 5. Variable Handling Functions
echo "<h3>Variable Handling</h3>";
$x = 10;

echo "Var Dump: ";
var_dump($x);
echo "<br>";

echo "Is Set: " . isset($x) . "<br><br>";


// 🔹 6. File Functions
echo "<h3>File Handling</h3>";
$file = fopen("test.txt", "w");
fwrite($file, "Hello PHP");
fclose($file);

echo "File 'test.txt' created and written successfully!";

?>