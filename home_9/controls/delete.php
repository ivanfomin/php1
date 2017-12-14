<?php
require __DIR__ . '/../autoload.php';

if (isset($_GET['id'])) {
    $book = new \App\Models\GuestBook();
    $book->delete($_GET['id']);
}

header("Location: /admin.php");