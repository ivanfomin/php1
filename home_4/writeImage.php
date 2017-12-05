<?php

if (isset($_FILES['myFile'])) {
    if (0 == $_FILES['myFile']['error']) {
        move_uploaded_file($_FILES['myFile']['tmp_name'],
            __DIR__ . '/files/' . $_FILES['myFile']['name']
        );
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);