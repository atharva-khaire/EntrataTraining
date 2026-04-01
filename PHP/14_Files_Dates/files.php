<?php

echo "<h2>PHP File Handling</h2>";

// Write
$file = fopen("demo.txt", "w");
fwrite($file, "Hello PHP\n");
fwrite($file, "File Handling Demo\n");
fclose($file);

// Append
$file = fopen("demo.txt", "a");
fwrite($file, "New Line Added\n");
fclose($file);

// Read
$file = fopen("demo.txt", "r");
echo "<h3>File Content:</h3>";

while(!feof($file)){
    echo fgets($file) . "<br>";
}
fclose($file);

// Check file
if(file_exists("demo.txt")){
    echo "<br>File exists<br>";
}

// Delete (uncomment to test)
// unlink("demo.txt");

?>