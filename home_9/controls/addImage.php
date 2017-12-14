<?php
require __DIR__ . '/../autoload.php';

$upload = new \App\Models\Image();
$upload->upload();

header("Location: /admin.php");