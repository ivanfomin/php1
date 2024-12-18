<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 06.12.17
 * Time: 14:35
 */

class Article
{
    protected $id;
    protected $title;
    protected $author;
    protected $content;
    /**php1
     * Article constructor.
     * @param string $title
     * @param string $content
     * @param ?string $author
     */
    public function __construct(string $title, string $content, string $author = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function writeToFile(): void
    {
        $name = __DIR__ . '/../articles/' . $this->title;
        file_put_contents($name, $this->content);
    }

}