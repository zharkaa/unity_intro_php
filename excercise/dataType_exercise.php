<?php 

/* 
    Arithmetic Operations for int and float data types
    - Addition (+)
    - Subtraction (-)
    - Multiplication (*)
    - Division (/)
    - Modulus (%)
*/
// Define two variables with integer values
$number1 = 10;
$number2 = 5;

// Perform arithmetic operations
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;
$quotient = $number1 / $number2;
$remainder = $number1 % $number2;

// Output the results
echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>";
echo "Remainder: " . $remainder . "<br>";

/* 
    string concatenation
*/
// Define two variables with string values
$firstName = "John";
$lastName = "Doe";

// Concatenate the strings
$fullName = $firstName . " " . $lastName;

// Output the full name
echo "Full Name: " . $fullName . "<br>";

/*
    boolean operations
*/
// Define two boolean variables
$isStudent = true;
$isTeacher = false;

// Perform logical operations
$andResult = $isStudent && $isTeacher;
$orResult = $isStudent || $isTeacher;
$notResult = !$isStudent;

// Output the results
echo "AND: " . ($andResult ? "true" : "false") . "<br>";
echo "OR: " . ($orResult ? "true" : "false") . "<br>";
echo "NOT: " . ($notResult ? "true" : "false") . "<br>";

/* 
    Array operations
*/
// Define an array of numbers
$numbers = array(1, 2, 3, 4, 5);

// Access elements by index
echo "Element at index 0: " . $numbers[0] . "<br>";
echo "Element at index 2: " . $numbers[2] . "<br>";

// Add elements to the array
$numbers[] = 6;
$numbers[] = 7;

// Output the updated array
echo "Updated Array: " . print_r($numbers, true) . "<br>";

