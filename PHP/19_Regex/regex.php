<?php

echo "<h2>PHP Regex Demo</h2>";

// Basic match
if(preg_match("/php/i", "I love PHP")){
    echo "Match Found<br>";
}

// Match all
$text = "PHP PHP Java";
preg_match_all("/PHP/i", $text, $matches);
echo "Matches: ";
print_r($matches);
echo "<br>";

// Replace
echo preg_replace("/Java/i", "PHP", "I love Java") . "<br>";

// Email validation
$email = "test@gmail.com";
if(preg_match("/^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$/", $email)){
    echo "Valid Email<br>";
}

// Password validation
$password = "Pass123";
if(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,}$/", $password)){
    echo "Strong Password<br>";
}

?>