<?php

$number = $_GET['num'] ?? 0;

if (0 != $number) {
    ?>
    <img src="images/<?php echo $number . '.jpg'; ?>">
    <br>
    <a href="index.html">Назад</a>
    <?php
}