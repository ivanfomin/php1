<?php

class Uploader
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    protected function isUploaded()
    {
        if (isset($_FILES[$this->name])) {
            if (0 == $_FILES[$this->name]['error']) {
                return true;
            }
        } else {
            return false;
        }
    }

    public function upload()
    {
      //  var_dump($_FILES[$this->name]);
       if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->name]['tmp_name'],
                __DIR__ . '/files/' . $_FILES[$this->name]['name']
           );
        }
    }
}