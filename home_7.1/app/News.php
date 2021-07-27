<?php

class News
{
    protected $data = [];
    protected $path = __DIR__ . '/../articles/';

    public function setArticle(Article $article)
    {
        $this->data[] = $article;
        file_put_contents($this->path . $article->getTitle(), $article->getMessage() );
    }

    public function getArticles()
    {
        return $this->data;
    }

    public function getArticle(int $id) : Article
    {
        return $this->data[$id];
    }

}