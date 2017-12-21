<?php

if (isset($_GET['id'])) {
    echo file_get_contents(__DIR__ . '/articles/' . $_GET['id'] . '.txt');
}
?>
<br>
<a href="/index.php">Вернуться</a>
