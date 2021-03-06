<?php

class GuestBook
{
    protected $data;
    protected $path;

    public function __construct()
    {
        $path = __DIR__ . '/../guestBook.txt';
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
        $this->data[] = $text;
    }

    public function save()
    {
        if (is_writable($this->path)) {
            file_put_contents($this->path, implode(PHP_EOL, $this->data));
        }
    }
}