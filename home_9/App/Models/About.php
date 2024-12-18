<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 14.12.17
 * Time: 15:20
 */

namespace App\Models;


class About extends Model
{
    protected $table = 'about';

    public function update(string $record)
    {
        $sql = 'UPDATE ' . $this->table . ' SET content = :content WHERE id=1';
        $this->db->execute($sql, [':content' => $record]);
    }

}