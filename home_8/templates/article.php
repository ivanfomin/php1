<?php
include_once '../classess/DB.php';
if (isset($_GET['id'])) {
    $db = new DB();
    $sql = 'SELECT * FROM news WHERE id=:id';
    $article = $db->query($sql, [':id' => $_GET['id']]);
    if (false != $article[0]) {
        ?><h3><?php echo $article[0]['title']; ?></h3>
        <article><?php echo $article[0]['text']; ?></article>
        <cite><?php echo $article[0]['author']; ?></cite><?php
    }
} ?>
<br>
<a href="/index.php">Вернуться</a>
