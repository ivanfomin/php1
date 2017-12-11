<?php
session_start();
include_once __DIR__ . '/../classess/Article.php';

if (isset($_GET['id'])) {
    $art = unserialize($_SESSION['data'][$_GET['id']]);
    ?>
    <h2><?php echo $art->getTitle(); ?></h2>
    <article><?php echo $art->getContent(); ?></article>
    <?php
}

?>
<a href="/index.php">Вернуться</a>
