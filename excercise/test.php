<form method="post" action="">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" id="num1" required>
    
    <label for="num2">Number 2:</label>
    <input type="number" name="num2" id="num2" required>
    
    <input type="submit" value="Compare">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    echo "Comparison Results:<br>";
    echo "$num1 == $num2: " . ($num1 == $num2 ? "true" : "false") . "<br>";
    echo "$num1 != $num2: " . ($num1 != $num2 ? "true" : "false") . "<br>";
    echo "$num1 < $num2: " . ($num1 < $num2 ? "true" : "false") . "<br>";
    echo "$num1 > $num2: " . ($num1 > $num2 ? "true" : "false") . "<br>";
    echo "$num1 <= $num2: " . ($num1 <= $num2 ? "true" : "false") . "<br>";
    echo "$num1 >= $num2: " . ($num1 >= $num2 ? "true" : "false") . "<br>";
}
?>