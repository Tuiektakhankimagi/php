<?php

function sumOfDigits($number) {
    $sum = 0;
    $digits = str_split($number);

    foreach ($digits as $digit) {
        $sum += $digit;
    }

    return $sum;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $sum = sumOfDigits($number);
    echo "Sum of digits in $number is: $sum";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sum of Individual Digits</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>