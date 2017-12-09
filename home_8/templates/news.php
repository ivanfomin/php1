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
foreach ($this->data as $article) {
    ?> <a href="/templates/article.php?id=<?php echo $article['id']; ?>"><h3><?php echo $article['title']; ?></h3></a>
    <article><?php echo $article['text']; ?></article>
    <cite><?php echo $article['author']; ?></cite>
    <?php
}
?>
</body>
</html>

