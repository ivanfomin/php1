<?php
include_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        img {
            width: 300px;
            height: auto;
        }
    </style>
</head>
<body>
<div>
    <ul>
        <?php

        $images = arrFiles(__DIR__ . '/files');
        foreach ($images as $image) {
            ?>
            <li>
                <a href="image.php?name=<?php echo $image?>"><img src="files/<?php echo $image; ?>"></a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
</body>
</html>