<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 14.12.17
 * Time: 14:34
 */

namespace App\Models;


class Image
{
    protected $name = 'myFile';

    public function getImages()
    {
        return  array_diff(scandir(__DIR__ . '/../../images'), ['.', '..']);
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
        if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->name]['tmp_name'],
                __DIR__ . '/../../images/' . $_FILES[$this->name]['name']
            );
        }
    }
}