<?php
require __DIR__ . '/autoload.php';

$contr = new App\Contr();
$book = new \App\Models\GuestBook();
$contr->setRecords($book->getRecords());
$image = new \App\Models\Image();
$contr->setImages($image->getImages());


$view = new \App\Views\View($contr);
$view->display(__DIR__ . '/templates/adminPanel.php');


