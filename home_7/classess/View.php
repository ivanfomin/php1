<?php

include_once __DIR__ . '/GuestBook.php';
include_once __DIR__ . '/Uploader.php';

class View
{
    protected $data = [];

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        include_once __DIR__ . '/../templates/' . $template;
    }

    public function upload($template, $name)    //загрузка изображения в директорию files
    {
        $uploader = new Uploader($name);
        include_once __DIR__ . '/../templates/' . $template;
    }

}