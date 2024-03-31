<?php
// Arithmetic operators
$a = 10;
$b = 5;
$sum = $a + $b; // Addition
$diff = $a - $b; // Subtraction
$prod = $a * $b; // Multiplication
$quot = $a / $b; // Division
$mod = $a % $b; // Modulus

// Assignment operators
$x = 10;
$x += 5; // Equivalent to: $x = $x + 5;
$y = 20;
$y -= 3; // Equivalent to: $y = $y - 3;
$z = 5;
$z *= 2; // Equivalent to: $z = $z * 2;
$w = 10;
$w /= 2; // Equivalent to: $w = $w / 2;

// Comparison operators
$p = 5;
$q = 10;
$equal = ($p == $q); // Equal to
$notEqual = ($p != $q); // Not equal to
$greaterThan = ($p > $q); // Greater than
$lessThan = ($p < $q); // Less than
$greaterThanOrEqual = ($p >= $q); // Greater than or equal to
$lessThanOrEqual = ($p <= $q); // Less than or equal to

// Logical operators
$bool1 = true;
$bool2 = false;
$andResult = ($bool1 && $bool2); // Logical AND
$orResult = ($bool1 || $bool2); // Logical OR
$notResult = !$bool1; // Logical NOT

// String concatenation operator
$name = "John";
$age = 25;
$concatenatedString = "My name is " . $name . " and I am " . $age . " years old.";

// Ternary operator
$isEven = ($age % 2 == 0) ? "Even" : "Odd";

// Null coalescing operator
$defaultValue = $name ?? "Default Value";

// Type operators
$var = 10;
$isInt = is_int($var); // Check if variable is of type integer
$isString = is_string($var); // Check if variable is of type string

// Bitwise operators
$num1 = 5; // 0101 in binary
$num2 = 3; // 0011 in binary
$bitwiseAnd = $num1 & $num2; // Bitwise AND: 0001 (1 in decimal)
$bitwiseOr = $num1 | $num2; // Bitwise OR: 0111 (7 in decimal)
$bitwiseXor = $num1 ^ $num2; // Bitwise XOR: 0110 (6 in decimal)
$bitwiseNot = ~$num1; // Bitwise NOT: 11111111111111111111111111111010 (-6 in decimal)
$bitwiseLeftShift = $num1 << 2; // Bitwise left shift: 10100 (20 in decimal)
$bitwiseRightShift = $num1 >> 1; // Bitwise right shift: 0010 (2 in decimal)
?>
