<?php

class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        include_once $template;
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

}