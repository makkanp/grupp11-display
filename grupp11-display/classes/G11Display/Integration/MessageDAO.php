<?php

/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 2017-04-18
 * Time: 14:35
 */
class MessageDAO {
    private $dbobj;
    private $db;
    private $display;

    public function __construct($display)    {
        $this->dbobj = new DBinfo();
        $this->db = $this->dbobj->getDB();
        $this->recipe = $display;
    }

    public function createNewMessage($message) {

       // if(!(ctype_print($message))) //bör kanske ligga i view eller controller???
        //    return ['error' => 'Invalid message'];

        $stmt = $this->db->prepare("INSERT INTO messages (message) VALUES (?)");
        $stmt->bind_param("s", $message);
        $stmt->execute();
    }

    public function getMessage()    {
        $sql = "SELECT * 
                FROM display 
                ORDER BY cid DESC";
        $result = $this->db->query($sql);

        return $result;
        // while
    }

    public function __destruct()
    {
        close();
    }
}


class DBinfo
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

    public function getConnection(){
        return $this->mysqli;
    }
}
