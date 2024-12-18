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
     *
     * @param int $id
     * @param string $title
     * @param string $content
     * @param ?string $author
     */
    public function __construct(int $id, string $title, string $content, string $author = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function writeToFile(): void
    {
        $name = __DIR__ . '/../articles/' . $this->title;
        file_put_contents($name, $this->content);
    }

}