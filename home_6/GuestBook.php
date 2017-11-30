<?php

class GuestBook
{
    protected $data;
    protected $path;

    public function __construct(string $path)
    {
        if (is_readable($path)) {
            $this->path = $path;
            $this->data = file($path);
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function append(string $text)
    {
        $this->data[] = "\n" . $text;
    }

    public function save()
    {
        if (is_writable($this->path)) {
            file_put_contents($this->path, $this->data);
        }
    }
}