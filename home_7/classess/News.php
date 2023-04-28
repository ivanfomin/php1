<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 06.12.17
 * Time: 14:35
 */
include_once __DIR__ . '/Article.php';

class News
{

    protected $articles = __DIR__ . '/../articles/';

    /**
     * @return array
     */
    public function __invoke(): array
    {
        $files = [];
        $titles =  array_diff(scandir($this->articles), ['.', '..']);
        foreach ($titles as $title) {
            $files[$title] = file_get_contents($this->articles . $title);
        }
        return $files;
    }

}