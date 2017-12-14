<?php
require __DIR__ . '/autoload.php';

$book = new \App\Models\GuestBook();
$records = $book->getRecords();
$about = new \App\Models\About();
$image = new \App\Models\Image();
$images = $image->getImages();

$view = new \App\Views\View($records, $images, $about);
$view->display('adminPanel.php');


