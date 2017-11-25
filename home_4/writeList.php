<?php

if (isset($_POST['record'])) {
    $fullName = __DIR__ . '/guestBook.txt';
    if (is_writable($fullName)) {
        $lists = file($fullName);
        $lists[] = "\n" . $_POST['record'];
        file_put_contents($fullName, $lists);
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);