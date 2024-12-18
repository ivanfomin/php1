<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 06.12.17
 * Time: 14:35
 */
include_once __DIR__ . '/Article.php';

class MyNews
{

    protected string $articles = __DIR__ . '/../articles/';

    /**
     * @return array
     */
    public function __invoke(): array
    {
        $files = [];
        $articles =  array_diff(scandir($this->articles), ['.', '..']);
        foreach ($articles as $title) {
            $content = file_get_contents($this->articles . '/'. $title);
            $art = new Article($title, $content);
            $files[] = $art;
        }
        return $files;
    }

}