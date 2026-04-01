<?php

echo "<h2>PHP Arrays Demo</h2>";

// Indexed Array
$fruits = ["Apple", "Banana", "Mango"];
echo "Indexed: " . $fruits[0] . "<br>";

// Associative Array
$person = ["name" => "Atharva", "age" => 20];
echo "Name: " . $person["name"] . "<br>";

// Multidimensional Array
$students = [
    ["Atharva", 20],
    ["Rahul", 21]
];
echo "Student: " . $students[0][0] . "<br><br>";

// Functions
$arr = [3, 1, 2];
sort($arr);
echo "Sorted: ";
print_r($arr);
echo "<br>";

echo "Count: " . count($arr) . "<br>";

// Push & Pop
array_push($arr, 5);
array_pop($arr);

// Loop
echo "<br>Loop:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

?>