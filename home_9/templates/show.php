<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .records {
        float: left;
        width: 100px;
    }

    .images {
        padding-left: 200px;
        width: 300px;
    }

    img {
        widows: 100px;
        height: 100px;
    }
</style>
<body>
<div class="about">
    <h2>Обо мне</h2>
    <?php
    echo $this->aboutMe['content'];
    ?>
</div>
<div class="records">
    <?php
    foreach ($this->records as $record) {
        ?> <h2><?php echo $record['title']; ?></h2>
        <p>
            <?php echo $record['content']; ?>
        </p>
        <?php
    }
    ?>
</div>
<div class="images">
    <ul>
        <?php
        foreach ($this->images as $image) {
            ?>
            <li><img src="/images/<?php echo $image; ?>"></li>
            <?php
        }
        ?>
    </ul>
</div>
</body>
</html>

