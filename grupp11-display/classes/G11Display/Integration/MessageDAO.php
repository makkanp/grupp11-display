<?php

/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 2017-04-18
 * Time: 14:35
 */
namespace G11Display\Integration;

use G11Display\Integration\DBinfo as DBI;
class MessageDAO  {

    private $mysqli = null;

    public function __construct(){
        if($this->mysqli == null)
            $this->mysqli = new \mysqli(DBI::HOST, DBI::USERNAME, DBI::PASSWORD, DBI::DB);

        if ($this->mysqli->error)
            throw new Exception($this->mysqli->error);
    }

    public function createNewMessage($message) {

       // if(!(ctype_print($message))) //bör kanske ligga i view eller controller???
        //    return ['error' => 'Invalid message'];

        $stmt = $this->mysqli->prepare("INSERT INTO messages (message) VALUES (?)");
        $stmt->bind_param("s", $message);
        $stmt->execute();


            if ($this->mysqli->affected_rows != 1){
                die("Misslyckades med insättning av värde");
            }
        }

    public function getMessage()    {
        $sql = "SELECT * 
                FROM messages 
                ORDER BY cid DESC";
        $result = $this->mysqli->query($sql);


        if($result) {
           // die("Result är tomt");
            $row = $result->fetch_row();
            return $row[1];
        }
        //while (($row = $result->fetch_row()) != NULL)

        return NULL;

    }

    public function __destruct()
    {
        $this->mysqli->close();
    }
}


