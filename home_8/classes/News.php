<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 06.12.17
 * Time: 14:35
 */
include_once __DIR__ . '/../autoload.php';

class News
{

    protected string $path = __DIR__ . '/../articles/';
    protected array $articles = [];

    public function __construct()
    {
        $db = new DB();
        $sql = 'SELECT * FROM news';
        $news = $db->query($sql);
        foreach ($news as $article) {
            $this->articles[] = new Article($article['id'], $article['title'], $article['content'], $article['author']);
        }
    }

    public function addArticle(int $id, string $title, string $content, string $author): void
    {
        $this->articles[] = new Article($id, $title, $content, $author);
    }

    public function getArticles(): array
    {
        return $this->articles;
    }

    public function __invoke(): array
    {
        $files = [];
        $articles = array_diff(scandir($this->path), ['.', '..']);
        foreach ($articles as $title) {
            $content = file_get_contents($this->articles . '/' . $title);
            $art = new Article($title, $content);
            $files[] = $art;
        }
        return $files;
    }


}