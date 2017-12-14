<?php
require __DIR__ . '/../autoload.php';

if (isset($_POST['title']) && isset($_POST['content'])) {
    $book = new \App\Models\GuestBook();
    $book->insert([$_POST['title'], $_POST['content']]);
}

header("Location: /admin.php");