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
<ul>
    <?php
    foreach ($this->data as $name => $value) {
        ?>
        <li>
        <a href="article.php?art=<?= $name ?>"> <?= $name ?></h1> </a>
        </li>
        <br>
        <?php
    }
    ?>
</ul>
</body>
</html>