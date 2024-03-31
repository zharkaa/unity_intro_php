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

    $yes = "Yes<br>";
    $no = "No<br>";

    echo "Comparison Results:<br>";
    echo "$num1 is equal to $num2: ";
    if ($num1 == $num2) {
        echo $yes;
    } else {
        echo $no;
    }

    echo "$num1 is not equal to $num2: ";
    if ($num1 != $num2) {
        echo $yes;
    } else {
        echo $no;
    }

    echo "$num1 is less than $num2: ";
    if ($num1 < $num2) {
        echo $yes;
    } else {
        echo $no;
    }

    echo "$num1 is greater than $num2: ";
    if ($num1 > $num2) {
        echo $yes;
    } else {
        echo $no;
    }

    echo "$num1 is less than or equal to $num2: ";
    if ($num1 <= $num2) {
        echo $yes;
    } else {
        echo $no;
    }

    echo "$num1 is greater than or equal to $num2: ";
    if ($num1 >= $num2) {
        echo $yes;
    } else {
        echo $no;
    }
}
?>
