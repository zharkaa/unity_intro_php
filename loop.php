<?php
// FILEPATH: /e:/DEV/xampp/htdocs/unity/intro_to_php/loop.php

$br = "<br>";

// For Loop
echo "$br For Loop: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "\n";

// While Loop
echo "$br While Loop: ";
$j = 1;
while ($j <= 5) {
    echo $j . " ";
    $j++;
}
echo "\n";

// Do-While Loop
echo "$br Do-While Loop: ";
$k = 1;
do {
    echo $k . " ";
    $k++;
} while ($k <= 5);
echo "\n";

// Foreach Loop
echo "$br Foreach Loop: ";
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "\n";

// Nested Loop
echo "$br Nested Loop: ";
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= 3; $col++) {
        echo "(" . $row . "," . $col . ") ";
    }
}
echo "\n";
?>
