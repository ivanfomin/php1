<?php
include_once __DIR__ . '/functions.php';

if (isset($_GET['num_1']) && isset($_GET['num_2'])) {
    $value_1 = $_GET['num_1'];
    $value_2 = $_GET['num_2'];
    $sign = $_GET['sign'];

    $result = calc($value_1, $value_2, $sign);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get" action="calculate.php">
    <input type="number" name="num_1" value="<?php echo $value_1 ?? 0; ?>">
    <br>
    <p>
        <select name="sign">
            <option selected value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </p>
    <input type="number" name="num_2" value="<?php echo $value_2 ?? 0; ?>">
    <br>
    <input type="submit" value="=">
    <br>
    <i><?php echo $result; ?></i>
</form>
</body>
</html>
