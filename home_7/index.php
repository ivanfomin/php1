<?php

include_once __DIR__ . '/classess/View.php';
include_once  __DIR__ . '/classess/GuestBook.php';

$view = new View();

$view->assign(1, 'One');
$view->assign(2, 'Two');
$view->assign(3, 'Three');

//$view->display('index.php');
//  $html =  $view->render('test.php');
//  echo $html;

$book = new GuestBook();
$viewBook = new View($book->getData());
$viewBook->display('index.php');
$view->upload('upload.php');
