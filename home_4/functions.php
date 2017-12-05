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