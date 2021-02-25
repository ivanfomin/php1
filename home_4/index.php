<?php
setcookie('foo', 42, time() + 86400);
include_once __DIR__ . '/functions.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        img {
            width: 300px;
            height: auto;
        }
    </style>
    <title>Document</title>
</head>
<body>

<?php
var_dump($_COOKIE);
$lists = readGuestBook();
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

<form method="post" action="/writeFile.php">
    <input type="text" name="record">
    <input type="submit">
</form>
<br>
<h3>Изображения</h3>
<div>
    <ul>
        <?php

        $images = arrFiles(__DIR__ . '/files');
        foreach ($images as $image) {
            ?>
            <li>
                <a href="image.php?name=<?php echo $image?>"><img src="files/<?php echo $image; ?>"></a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
<form method="post" action="/writeImage.php" enctype="multipart/form-data">
    <input type="file" name="myFile">
    <input type="submit">
</form>

</body>
</html>

