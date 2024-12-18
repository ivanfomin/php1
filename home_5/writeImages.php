<?php
session_start();
include_once __DIR__ . "/functions.php";

if (isset($_FILES['myFile'])) {
    if (0 == $_FILES['myFile']['error']) {
          move_uploaded_file($_FILES['myFile']['tmp_name'],
              __DIR__ . '/images/' . $_FILES['myFile']['name']
          );
    }
}

logs(getCurrentUser(), date('Y-m-d:H-i'), $_FILES['myFile']['name']);

header('Location: ' . 'index.php');
