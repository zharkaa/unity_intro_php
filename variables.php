<?php
// Declare a variable and assign a value
$name = "John";

$br = "<br>";

// Print the value of the variable
echo $name; // Output: John

// Update the value of the variable
$name = "Jane";

// Print the updated value
echo $name; // Output: Jane

// Variable types
$age = 25; // Integer
$height = 1.75; // Float
$isStudent = true; // Boolean
$grades = array(90, 85, 95); // Array

// Variable interpolation
echo "My name is $name and I am $age years old."; // Output: My name is Jane and I am 25 years old.

// Variable scope
function myFunction() {
    $localVariable = "Local";
    echo $localVariable; // Output: Local
}

myFunction();
// echo $localVariable; // This will throw an error since $localVariable is not accessible outside the function

// Constants
define("PI", 3.14);
echo PI; // Output: 3.14

// Variable references
$a = 5;
$b = &$a;
$b = 10;
echo $a; // Output: 10
