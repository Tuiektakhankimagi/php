<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h2>Armstrong Number Checker</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $originalNumber = $number;
        $sum = 0;

        while ($originalNumber > 0) {
            $digit = $originalNumber % 10;
            $sum += $digit ** strlen((string)$number);
            $originalNumber = (int)($originalNumber / 10);
        }

        if ($sum == $number) {
            echo "<p>$number is an Armstrong number.</p>";
        } else {
            echo "<p>$number is not an Armstrong number.</p>";
        }
    }
    ?>
</body>
</html>