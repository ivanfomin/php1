<?php
require __DIR__ . '/../autoload.php';

if (isset($_POST['text'])) {
    $about = new \App\Models\About();
    $about->update($_POST['text']);
}

header("Location: /admin.php");