<?php

include_once __DIR__ . '/classess/View.php';
include_once __DIR__ . '/classess/GuestBook.php';
include_once __DIR__ . '/classess/Article.php';
include_once __DIR__ . '/classess/News.php';

$book = new GuestBook();
$book->append('Hello world!');
$viewBook = new View($book->getData());
$viewBook->display(__DIR__ . '/show.php');    //отображаем содержимое гостевой книги

$art1 = new Article('Первая статья', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor, nibh sit 
amet blandit scelerisque, nulla lacus accumsan eros, sed laoreet velit velit a neque. Vestibulum eu aliquet augue, eu ullamcorper lectus.
Proin facilisis ac arcu id sollicitudin. Pellentesque at velit fermentum, venenatis nisi sed, imperdiet elit.
Suspendisse sit amet tristique urna. Integer tincidunt sapien lacus, tempus luctus diam accumsan vitae.');

$art2 = new Article('Вторая статья', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor, nibh sit 
amet blandit scelerisque, nulla lacus accumsan eros, sed laoreet velit velit a neque. Vestibulum eu aliquet augue, eu ullamcorper lectus.
Proin facilisis ac arcu id sollicitudin. Pellentesque at velit fermentum, venenatis nisi sed, imperdiet elit.
Suspendisse sit amet tristique urna. Integer tincidunt sapien lacus, tempus luctus diam accumsan vitae.');

$art3 = new Article('Третья статья', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor, nibh sit 
amet blandit scelerisque, nulla lacus accumsan eros, sed laoreet velit velit a neque. Vestibulum eu aliquet augue, eu ullamcorper lectus.
Proin facilisis ac arcu id sollicitudin. Pellentesque at velit fermentum, venenatis nisi sed, imperdiet elit.
Suspendisse sit amet tristique urna. Integer tincidunt sapien lacus, tempus luctus diam accumsan vitae.');

$news = new News();

$news->setArticles($art1);
$news->setArticles($art2);
$news->setArticles($art3);

$view = new View($news->getArticles());
$view->display(__DIR__ . '/news.php');