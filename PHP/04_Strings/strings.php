<?php

$name = "Atharva";

// Double quotes
echo "Hello $name <br>";

// Single quotes
echo 'Hello $name <br><br>';

// Functions
echo "Length: " . strlen($name) . "<br>";
echo "Word Count: " . str_word_count("Hello World") . "<br>";
echo "Reverse: " . strrev($name) . "<br>";
echo "Position: " . strpos("Hello World", "World") . "<br>";
echo "Replace: " . str_replace("World", "Atharva", "Hello World") . "<br>";

?>