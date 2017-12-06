<?php

if (isset($_GET['id'])) {
    $file = file(__DIR__ . '/../articles/' . $_GET['id']);
    echo implode(PHP_EOL, $file);
}

?>
<a href="/articles.php">Вернуться</a>
