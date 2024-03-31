<?php 
/* 
    Loop Exercise:
*/
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
$strings = ["a", "b", "c", "d", "e"];
foreach ($strings as $string) {
    echo $string . " ";
}
echo "\n";

// Nested Loop
// half pyramid
echo "$br Nested Loop: $br $br";
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo "*";
    }
    echo $br;
}
