<?php

if (isset($_POST['record'])) {
    $fullName = __DIR__ . '/guestBook.txt';
    if (is_writable($fullName)) {
        $lists = file($fullName);
        $lists[] = "\n" . $_POST['record'];
        file_put_contents($fullName, $lists);
    }
}

if (isset($_FILES['myFile'])) {
    if (0 == $_FILES['myFile']['error']) {
        if (strcasecmp(substr($_FILES['myFile']['name'], -4), '.png') ||
            strcasecmp(substr($_FILES['myFile']['name'], -4), '.jpg')) {
            move_uploaded_file($_FILES['myFile']['tmp_name'],
                __DIR__ . '/files/' . $_FILES['myFile']['name']
            );
        }
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);