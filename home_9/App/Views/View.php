<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 14.12.17
 * Time: 14:16
 */

namespace App\Views;


class View
{
    protected $records = [];
    protected $images = [];
    protected $aboutMe;

    public function __construct($records = [], $images = [], $about = '')
    {
        $this->records = $records;
        $this->images = $images;
        $this->aboutMe = $about;
    }

    public function display($template)
    {
        include_once __DIR__ . '/../../templates/' . $template;
    }
}