<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 14.12.17
 * Time: 14:35
 */

namespace App\Models;


class Model
{
    protected $db;
    protected $table;


    public function __construct()
    {
        $this->db = \App\DB::getInstance();
    }

    public function getRecords() :array
    {
        $sql = 'SELECT * FROM ' . $this->table;
        return $this->db->query($sql);
    }

    public function getFirst()
    {
        return $this->getRecords()[0];
    }

}