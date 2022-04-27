


<?php




// $units = 300;
$price;

function calculate_bill($units)
{
    if ($units <= 50) {

        $price = $units * 3.50;
        echo "the electricity bill is $price";
    } elseif ($units > 50 && $units <=150) {
        $price = $units * 4.00;
        echo "the electricity bill is $price";
    } elseif ($units > 150 && $units <= 250) {
        $price = $units * 5.20;
        echo "the electricity bill is $price";
    } elseif ($units > 250) {
        $price = $units * 6.50;
        echo "the electricity bill is $price";
    }

    return $price;
}



?>



<!DOCTYPE html>

<head>
    <title>PHP - Calculate Electricity Bill</title>
</head>

<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */


?>

<body>
    <div id="page-wrap">
        <h1>Php - Calculate Electricity Bill</h1>

        <form action="" method="post" id="quiz-form">
            <input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
        </form>

        <div>
            <?php echo '<br />' . $result_str; ?>
        </div>
    </div>
</body>

</html>