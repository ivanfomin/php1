<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
<?php
foreach ($this->data as $news) {
    foreach ($news->getArticles() as $article) {
        ?>
        <h3><a href="/article.php?id=<?php echo $article->getId(); ?>"><?php echo $article->getTitle(); ?></a>
        </h3>
        <p> <?php echo substr($article->getContent(), 0, 20); ?></p>
        <?php
    }
}
?>

</body>
</html>

