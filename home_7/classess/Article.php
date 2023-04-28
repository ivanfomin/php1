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
    /**
     * Article constructor.
     * @param $title
     * @param $content
     */
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->writeToFile();
    }

    protected function writeToFile()
    {
        $name = __DIR__ . '/../articles/' . $this->title;
        file_put_contents($name, $this->content);
    }

}