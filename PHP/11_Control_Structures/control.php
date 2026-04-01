<?php

echo "<h2>Control Structures Demo</h2>";

// IF
$age = 20;
if ($age >= 18) {
    echo "Adult<br>";
}

// IF-ELSE
$marks = 50;
if ($marks >= 60) {
    echo "Pass<br>";
} else {
    echo "Fail<br>";
}

// IF-ELSEIF
$score = 85;
if ($score >= 90) {
    echo "A<br>";
} elseif ($score >= 70) {
    echo "B<br>";
} else {
    echo "C<br>";
}

// SWITCH
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of week<br>";
        break;
    default:
        echo "Other day<br>";
}

// FOR LOOP
for ($i = 1; $i <= 3; $i++) {
    echo "For: $i<br>";
}

// WHILE LOOP
$i = 1;
while ($i <= 3) {
    echo "While: $i<br>";
    $i++;
}

// DO-WHILE
$i = 1;
do {
    echo "Do-While: $i<br>";
    $i++;
} while ($i <= 3);

// FOREACH
$arr = ["A", "B", "C"];
foreach ($arr as $val) {
    echo "Array: $val<br>";
}

// BREAK & CONTINUE
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue;
    if ($i == 5) break;
    echo "Jump: $i<br>";
}

?>