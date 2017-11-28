<?php
session_start();

include_once "functions.php";
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
            width: 100px;
        }
    </style>
    <title>Главная</title>
</head>
<body>
<h2>
    Привет <?php echo getCurrentUser(); ?>
</h2>
<ul>
    <?php
    $images = arrFiles(__DIR__ . '/images');
    foreach ($images as $image) {
        ?>
        <li><img src="images/<?php echo $image; ?>"></li>
        <?php
    }
    ?>
</ul>
<?php
if (!is_null(getCurrentUser())) {
?>
<h3>Загрузить фото</h3>
<form method="post" action="writeImages.php" enctype="multipart/form-data">
    <input type="file" name="myFile">
    <input type="submit">
    <?php
    } else {
    ?><a href="login.php">Войти</a>
    <?php
    }
    ?>
</body>
</html>


