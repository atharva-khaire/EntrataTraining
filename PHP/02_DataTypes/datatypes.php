<?php

// 1. Integer
$intVar = 100;

// 2. Float (Double)
$floatVar = 10.75;

// 3. String
$stringVar = "Hello Atharva";

// 4. Boolean
$boolVar = true;

// 5. Array
$arrayVar = array("Apple", "Banana", "Mango");

// 6. Object
class Car {
    public $name = "BMW";
}
$objVar = new Car();

// 7. NULL
$nullVar = NULL;

// 8. Resource (Database connection example)
$resourceVar = mysqli_connect("localhost", "root", "", "test");


// 🔹 Output all values with type
echo "<h3>PHP Data Types Demo</h3>";

echo "<b>Integer:</b> ";
var_dump($intVar);
echo "<br><br>";

echo "<b>Float:</b> ";
var_dump($floatVar);
echo "<br><br>";

echo "<b>String:</b> ";
var_dump($stringVar);
echo "<br><br>";

echo "<b>Boolean:</b> ";
var_dump($boolVar);
echo "<br><br>";

echo "<b>Array:</b> ";
var_dump($arrayVar);
echo "<br><br>";

echo "<b>Object:</b> ";
var_dump($objVar);
echo "<br><br>";

echo "<b>NULL:</b> ";
var_dump($nullVar);
echo "<br><br>";

echo "<b>Resource:</b> ";
var_dump($resourceVar);
echo "<br><br>";

?>