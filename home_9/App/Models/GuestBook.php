<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 14.12.17
 * Time: 10:39
 */

namespace App\Models;


class GuestBook extends Model
{
    protected $table = 'guestBook';


    public function insert(array $records)
    {
        $sql = 'INSERT INTO ' . $this->table . ' (title, content ) VALUES (:title, :content)';
        $rec[':title'] = $records[0];
        $rec[':content'] = $records[1];
        $this->db->execute($sql, $rec);
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $this->db->execute($sql, [':id' => $id]);
    }

}