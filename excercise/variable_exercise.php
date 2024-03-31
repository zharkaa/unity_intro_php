<?php
// simple exercise that demonstrates how to swap the values of two variables using a temporary variable in PHP.
// Declare and initialize two variables
$a = 10;
$b = 20;

// Display the original values
echo "Original values: a = $a, b = $b<br>";

// Swap the values using a temporary variable
$temp = $a;
$a = $b;
$b = $temp;

// Display the swapped values
echo "Swapped values: a = $a, b = $b";