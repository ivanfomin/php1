<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статья</title>
</head>
<body>
<?php
include_once '../classes/DB.php';

if (isset($_GET['id'])) {
    $db = new DB();
    $sql = 'SELECT * FROM news WHERE id=:id';
    $article = $db->query($sql, [':id' => $_GET['id']]);
    if (false != $article[0]) {
        ?><h3><?php echo $article[0]['title']; ?></h3>
        <article><?php echo $article[0]['content']; ?></article>
        <cite><?php echo $article[0]['author']; ?></cite><?php
    }
}
?>

<br>
<a href="/index.php">Вернуться</a>
</body>
</html>
