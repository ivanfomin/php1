<?php
//каждая статья(заголовок, содержание) хранится в отдельном файле, _GET['id'] - имя файла, напр. 1.txt, 2.txt
if (isset($_GET['id'])) {
    echo file_get_contents(__DIR__ . '/articles/' . $_GET['id'] . '.txt');
}
?>
<br>
<a href="/index.php">Вернуться</a>
