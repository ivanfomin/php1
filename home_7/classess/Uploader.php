<?php

class Uploader
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->name])) {
            if (0 == $_FILES[$this->name]['error']) {
                $this->upload();
            }
        }
    }

    protected function upload()
    {
        move_uploaded_file($_FILES[$this->name]['tmp_name'],
            __DIR__ . '/../files/' . $_FILES[$this->name]['name']
        );
    }
}