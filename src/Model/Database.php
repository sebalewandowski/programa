<?php

namespace Programa\Model;

use PDO;

class Database
{
    private $_db;
    static $_instance;

    private function __construct()
    {
        $db = parse_ini_file(__DIR__ . "/../../config.ini");
        $host = $db['DB_HOST'];
        $username = $db['DB_USERNAME'];
        $password = $db['DB_PASSWORD'];
        $port = $db['DB_PORT'];
        $dbName = $db['DB_DATABASE'];

        $this->_db = new PDO("mysql:host=$host;port=$port;dbname=$dbName", $username, $password);
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function query($sql)
    {
        return $this->_db->query($sql);
    }
}