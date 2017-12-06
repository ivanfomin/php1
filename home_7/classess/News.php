<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 06.12.17
 * Time: 14:35
 */
include_once 'Article.php';

class News
{
    protected $articles = [];

    /**
     * @return array
     */
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * @param array $articles
     */
    public function setArticles(Article $article): void
    {
        $this->articles[] = $article;
    }

}