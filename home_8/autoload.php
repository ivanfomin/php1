<?php
function my_autoload($class): void
{
    require_once str_replace('\\', '/', __DIR__ . '/classes/' . $class . '.php');
}

spl_autoload_register('my_autoload');