<?php

function __autoload($class)
{
    require_once str_replace('\\', '/', __DIR__ .'/' . $class . '.php');
}