<?php


include_once __DIR__ . '/autoload.php';

$news = new MyNews();

$view = new View($news());

$view->display(__DIR__ . '/show.php');