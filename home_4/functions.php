<?php

function readGuestBook()
{
    $name = __DIR__ . '/guestBook.txt';

    if (is_readable($name)) {
        return file($name);
    } else {
        return null;
    }

}

function arrFiles($path)
{
    $files = scandir($path);
    return array_diff($files, ['.', '..']);

}