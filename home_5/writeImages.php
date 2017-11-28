<?php
session_start();
include_once "functions.php";

if (isset($_FILES['myFile'])) {
    if (0 == $_FILES['myFile']['error']) {
        if (strcasecmp(substr($_FILES['myFile']['name'], -4), '.png') ||
            strcasecmp(substr($_FILES['myFile']['name'], -4), '.jpg')) {
            move_uploaded_file($_FILES['myFile']['tmp_name'],
                __DIR__ . '/images/' . $_FILES['myFile']['name']
            );
        }
    }
}

logs(getCurrentUser(), date('Y-m-d:H-i'), $_FILES['myFile']['name']);

header('Location: ' . $_SERVER['HTTP_REFERER']);