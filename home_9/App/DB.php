<?php

namespace App;
class DB
{
    protected $path = __DIR__ . '/../conf.ini';
    protected $dbh;
    private static $db = null;

    private function __construct()
    {
        $config = parse_ini_file($this->path);
        $this->dbh = new \PDO($config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'], 'root', '321', [
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',]);
    }

    public static function getInstance(): DB
    {
        if (is_null(self::$db)) {
            self::$db = new DB();
        }
        return self::$db;
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function query(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);
        if (false === $result) {
            return false;
        }
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }


}