<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 06.12.17
 * Time: 14:35
 */

class Article
{
    protected $title;
    protected $content;
    protected $path = __DIR__ . '/../articles/';    //директории где хранятся статьи, как отдельные файлы
    protected static $count = 0;
    protected $id;


    /**
     * Article constructor.
     * @param $title
     * @param $content
     */
    public function __construct(string $title, string $content)
    {
        $this->id = static::$count++;
        $this->title = $title;
        $this->content = $content;
        $this->writeToFile();
    }

    protected function writeToFile()
    {
        file_put_contents($this->path . $this->getId() . '.txt', $this->title . PHP_EOL . $this->content);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

}