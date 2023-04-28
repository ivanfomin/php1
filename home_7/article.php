<?php
include_once __DIR__ . '/autoload.php';

$articles = __DIR__ . '/articles/';

?>
<h1><?= $_GET['art']; ?> </h1>
<div><?= file_get_contents($articles . $_GET['art']); ?></div>
<a href="/index.php">Вернуться</a>
