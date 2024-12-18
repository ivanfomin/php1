<?php

class DB
{
    protected $path = __DIR__ . '/../conf.ini';
    protected $dbh;

    public function __construct()
    {
        $config = parse_ini_file($this->path);
        $this->dbh = new PDO($config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'], 'ioan', 'password');
    }

    public function execute(string $sql)
    {
        return $this->dbh->prepare($sql)->execute();
    }

    public function query(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);
        if (false === $result) {
            return false;
        }
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }


}