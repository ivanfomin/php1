<?php

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
        include_once $template;
    }
}