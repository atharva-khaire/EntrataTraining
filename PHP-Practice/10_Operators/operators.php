<?php

echo "<h2>PHP Operators Output</h2>";
echo "<pre>";

// 1. Arithmetic Operators
$a = 10;
$b = 5;

echo "Addition: " . ($a + $b) . "\n";
echo "Subtraction: " . ($a - $b) . "\n";
echo "Multiplication: " . ($a * $b) . "\n";
echo "Division: " . ($a / $b) . "\n";
echo "Modulus: " . ($a % $b) . "\n\n";


// 2. Assignment Operators
$x = 10;
$x += 5;
echo "Assignment (+=): $x\n";

$x -= 3;
echo "Assignment (-=): $x\n\n";


// 3. Comparison Operators
$p = 10;
$q = "10";

echo "p == q : ";
var_dump($p == $q);

echo "p === q : ";
var_dump($p === $q);

echo "p != q : ";
var_dump($p != $q);

echo "p > 5 : ";
var_dump($p > 5);

echo "\n";


// 4. Increment / Decrement
$i = 5;
echo "Pre Increment: " . (++$i) . "\n";
echo "Post Increment: " . ($i++) . "\n";
echo "After Post: $i\n\n";


// 5. Logical Operators
$age = 20;

if($age > 18 && $age < 30){
    echo "Young Adult\n";
}

if($age > 18 || $age < 10){
    echo "Condition True\n";
}

if(!($age < 18)){
    echo "Not Minor\n";
}

echo "\n";


// 6. String Operators
$str1 = "Hello";
$str2 = "World";

echo $str1 . " " . $str2 . "\n";

$str1 .= " PHP";
echo $str1 . "\n\n";


// 7. Ternary Operator
$num = 7;
$result = ($num % 2 == 0) ? "Even" : "Odd";
echo "Number is $result\n\n";


// 8. Null Coalescing Operator
$username = $_GET['user'] ?? "Guest";
echo "User: $username\n\n";


// 9. Spaceship Operator
echo "5 <=> 10 : " . (5 <=> 10) . "\n";
echo "10 <=> 10 : " . (10 <=> 10) . "\n";
echo "15 <=> 10 : " . (15 <=> 10) . "\n\n";


// 10. Bitwise Operators
$m = 6;
$n = 3;

echo "AND: " . ($m & $n) . "\n";
echo "OR: " . ($m | $n) . "\n";
echo "XOR: " . ($m ^ $n) . "\n";

echo "</pre>";

?>