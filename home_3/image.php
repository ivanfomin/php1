<?php

$fileName = $_GET['file'] ?? 0;

if (0 != $fileName) {
    ?>
    <img src="images/<?php echo $fileName; ?>">
    <br>
    <a href="index.html">Назад</a>
    <?php
}