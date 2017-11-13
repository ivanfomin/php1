<?php

function arrFiles($path)
{
    $files = scandir($path);
    $correctFiles = array_diff($files, ['.', '..']);
    return $correctFiles;
}

function calc($a, $b, $sign)
{
    switch ($sign) {
        case '*':
            $res = $a * $b;
            break;
        case  '/':
            $res = $a / $b;
            break;
        case  '-':
            $res = $a - $b;
            break;
        default:
            $res = $a + $b;
            break;
    }

    return $res;
}
