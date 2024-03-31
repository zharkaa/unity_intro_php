<?php 

/* 
    Comparison Operators
    - Comparison operators are used to compare two values and return a boolean result (true or false).
    - The comparison operators in PHP are:
        - Equal to (==)
        - Not equal to (!=)
        - Greater than (>)
        - Less than (<)
        - Greater than or equal to (>=)
        - Less than or equal to (<=)
*/

// Define two variables
$number1 = 5;
$number2 = 10;

// Perform comparison operations
$equal = ($number1 == $number2);
$notEqual = ($number1 != $number2);
$greaterThan = ($number1 > $number2);
$lessThan = ($number1 < $number2);
$greaterThanOrEqual = ($number1 >= $number2);
$lessThanOrEqual = ($number1 <= $number2);

// Output the results
echo "Equal: " . ($equal ? "true" : "false") . "<br>";
echo "Not Equal: " . ($notEqual ? "true" : "false") . "<br>";
echo "Greater Than: " . ($greaterThan ? "true" : "false") . "<br>";
echo "Less Than: " . ($lessThan ? "true" : "false") . "<br>";
echo "Greater Than or Equal: " . ($greaterThanOrEqual ? "true" : "false") . "<br>";
echo "Less Than or Equal: " . ($lessThanOrEqual ? "true" : "false") . "<br>";
