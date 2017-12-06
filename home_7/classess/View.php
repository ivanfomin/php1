<?php

include_once 'GuestBook.php';
include_once 'Uploader.php';

class View
{
    protected $data = [];

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value . PHP_EOL;
    }

    public function display($template)
    {
        include_once __DIR__ . '/../templates/' . $template;
    }

    public function render($template)
    {
        ob_start();
        $data = $this->data;
        include __DIR__ . '/../templates/' . $template;
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    }

    public function upload($template)
    {
        $name = 'myFile';
        $uploader = new Uploader($name);
        include_once __DIR__ . '/../templates/' . $template;
    }

}