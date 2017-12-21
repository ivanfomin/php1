<?php

include_once __DIR__ . '/classess/View.php';
include_once __DIR__ . '/classess/Article.php';
include_once __DIR__ . '/classess/News.php';


$viewBook = new View();

$viewBook->assign('record_1', 'First record');
$viewBook->assign('record_2', 'Second record');
$viewBook->assign('record_3', 'Third record');

//$viewBook->display(__DIR__ . '/show.php');

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

$view = new View();

$view->assign('news', $news);
$view->display(__DIR__ . '/news.php');