<?php

class GuestBook
{
    protected $data;
    protected $path;

    public function __construct(string $path)
    {
        if (is_readable($path)) {
            $this->path = $path;
            $this->data = file($path, FILE_IGNORE_NEW_LINES);
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
            $data = [];
            foreach ($this->data as $datum) {
                $data = $datum . PHP_EOL;
            }
            file_put_contents($this->path, $data, FILE_APPEND);
        }
    }
}