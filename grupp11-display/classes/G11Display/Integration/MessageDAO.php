<?php

/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 2017-04-18
 * Time: 14:35
 */
class MessageDAO
{
    private $dbobj;
    private $db;
    private $display;

    public function __construct($display)
    {
        $this->dbobj = new DB();
        $this->db = $this->dbobj->getDB();
        $this->recipe = $display;
    }
}


class db
{
    private static $host = '127.0.0.1';
    private static $username = 'root';
    private static $password = '';
    private static $db = 'II1302';

    private $mysqli = null;

    public function __construct(){
        if($this->mysqli == null)
            $this->mysqli = new mysqli(self::$host, self::$username, self::$password, self::$db);

        if ($this->mysqli->error)
            throw new Exception($this->mysqli->error);
    }

    public function getDB(){
        return $this->mysqli;
    }
}
