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
    body {
        background-color: azure;
    }

    .records {
        float: left;
        width: 100px;
    }

    .images {
        padding-left: 200px;
        width: 300px;
    }

</style>
<body>
<div class="about">
    <h3>Новый текст обо мне</h3>
    <form method="post" action="/controls/changeAbout.php">
        <textarea name='text' rows="10" cols="40">
        </textarea>
        <br>
        <button type="submit">Отправить</button>
    </form>
</div>
<div class="records">
    <?php
    foreach ($this->records as $record) {
        ?> <h2><?php echo $record['title']; ?></h2>
        <p>
            <?php echo $record['content']; ?>
        </p>
        <a href="/controls/delete.php?id=<?php echo $record['id']; ?>">
            <button type="submit">Удалить</button>
        </a>
        <?php
    }
    ?>

    <h3>Добавить запись</h3>
    <form method="post" action="/controls/addRecord.php">
        <input type="text" name="title">
        <br>
        <input type="text" name="content">
        <br>
        <button type="submit">Отправить</button>
    </form>
</div>
<div class="images">

    <h3>Добавить изображение</h3>
    <form method="post" action="/controls/addImage.php" enctype="multipart/form-data">
        <input type="file" name='myFile'>
        <button type="submit">Загрузить</button>
    </form>
</div>
</body>
</html>

