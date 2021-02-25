<?php
$name = $_GET['name'] ?? 0;
if (0 != $name) {
    ?>
    <img src="files/<?php echo $name ; ?>">
    <br>
    <a href="index.php">Назад</a>
    <?php
}