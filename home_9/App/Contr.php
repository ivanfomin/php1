<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 18.12.17
 * Time: 19:03
 */

namespace App;


class Contr
{
    protected $records;
    protected $about;
    protected $images;

    public function setRecords(array $records)
    {
        $this->records = $records;
    }

    public function setAbout(array $about)
    {
        $this->about = $about;
    }

    public function setImages(array $images)
    {
        $this->images = $images;
    }

    /**
     * @return mixed
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @return mixed
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }


}