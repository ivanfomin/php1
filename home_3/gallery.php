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
        $num = 1;   //image number
        $images = arrFiles(__DIR__ . '/images');
        foreach ($images as $image) {
            ?>
            <li>
                <a href="image.php?num=<?php echo $num++; ?>"><img src="images/<?php echo $image; ?>"></a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
</body>
</html>