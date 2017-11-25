<?php
include_once __DIR__ . '/functions.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$lists = readFiles('guestBook.txt');
if (!is_null($lists)) {
    ?>
    <ol>
        <?php
        foreach ($lists as $list) {
            ?>
            <li>
                <?php echo $list; ?>
            </li>
            <?php
        }
        ?>
    </ol>
    <?php
}
?>

<form method="post" action="writeList.php">
    <input type="text" name="record">
    <input type="submit">
</form>
<br>
<form method="post" action="writeFiles.php" enctype="multipart/form-data">
    <input type="file" name="myFile">
    <input type="submit">
</form>
</body>
</html>

