<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 14.12.17
 * Time: 14:16
 */

namespace App\Views;


use App\Contr;

class View
{
    protected $records = [];
    protected $images = [];
    protected $aboutMe;

    public function __construct(Contr $contr)
    {
        $this->records = $contr->getRecords();
        $this->images = $contr->getImages();
        $this->aboutMe = $contr->getAbout();
    }

    public function display($template)
    {
        include_once $template;
    }
}