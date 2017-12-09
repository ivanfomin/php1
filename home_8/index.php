<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
<?php
include_once __DIR__ . '/classess/' . 'DB.php';
include_once __DIR__ . '/classess/' . 'View.php';
$db = new DB();
$sql = 'SELECT * FROM news';
$news = $db->query($sql);
if (false != $news) {
    $view = new View($news);
    $view->display('news.php');
}
?>

</body>
</html>