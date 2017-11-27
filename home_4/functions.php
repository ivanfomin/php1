<?php

function readFiles($name)
{
    if (is_readable($name)) {
        return file($name);
    } else {
        return null;
    }

}