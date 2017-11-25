<?php

function readFiles($name)
{
    $fullName = __DIR__ . '/' . $name;
    if (is_readable($fullName)) {
        return file($fullName);
    } else {
        return null;
    }

}