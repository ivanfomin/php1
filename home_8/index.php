<?php
include_once __DIR__ . '/autoload.php';



$news = new News();

$articles = $news->getArticles();

$view = new View();
/**php1
 * @param Article $article
 */
foreach ($articles as $article) {
    $view->assign($article->getTitle(), $article);
}

$view->display(__DIR__ . '/templates/news.php');

//foreach ($news as $article) {
//    $view->assign($article['title'], $article);
//}
//
//$view->display(__DIR__ . '/templates/article.php');
//$view->display(__DIR__ . '/templates/news.php');

