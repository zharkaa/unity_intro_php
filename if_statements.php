<?php
// FILEPATH: /e:/DEV/xampp/htdocs/unity/intro_to_php/if_statements.php

// Example 1: Basic if statement
$age = 25;

if ($age >= 18) {
    echo "You are eligible to vote.";
}

// Example 2: if-else statement
$temperature = 25;

if ($temperature > 30) {
    echo "It's a hot day.";
} else {
    echo "It's not a hot day.";
}

// Example 3: if-elseif-else statement
$grade = 75;

if ($grade >= 90) {
    echo "You got an A.";
} elseif ($grade >= 80) {
    echo "You got a B.";
} elseif ($grade >= 70) {
    echo "You got a C.";
} else {
    echo "You need to improve your grade.";
}

// Example 4: Nested if statements
$number = 10;

if ($number > 0) {
    if ($number % 2 == 0) {
        echo "The number is positive and even.";
    } else {
        echo "The number is positive and odd.";
    }
} else {
    echo "The number is negative.";
}

// Example 5: Ternary operator
$isRaining = true;

$weather = ($isRaining) ? "It's raining." : "It's not raining.";

echo $weather;
?>
