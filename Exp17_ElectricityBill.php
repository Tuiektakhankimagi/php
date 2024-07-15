<!DOCTYPE html>
<html>
<head>
    <title>PHP - Calculate Electricity Bill</title>
</head>
<body>

<?php
if(isset($_POST['calculate'])){
    $units = $_POST['units'];
    $bill = calculate_bill($units);
    echo "Total amount for {$units} units is: {$bill}";
}

function calculate_bill($units){
    $unit_cost = 0;
    
    if($units <= 50){
        $unit_cost = 3.50;
    }else if($units <= 100){
        $unit_cost = 4.00;
    }else if($units <= 200){
        $unit_cost = 5.20;
    }else{
        $unit_cost = 6.50;
    }
    
    $bill = $units * $unit_cost;
    return number_format((float)$bill, 2, '.', '');
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Enter number of units: <input type="number" name="units" min="1" max="999" required><br><br>
    <input type="submit" name="calculate" value="Calculate Bill">
</form>

</body>
</html>
