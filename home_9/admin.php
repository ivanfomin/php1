<?php
require __DIR__ . '/autoload.php';

$book = new \App\Models\GuestBook();
$records = $book->getRecords();
$image = new \App\Models\Image();
$images = $image->getImages();

$view = new \App\Views\View($records, $images);
$view->display('adminPanel.php');


