<?php

/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 2017-04-18
 * Time: 16:24
 */


class Controller
{
    private $messageDAO;

    public function __construct() {
        $this->messageDAO = new MessageDAO();
    }

    public function createNewMessage($message){


        return $this->messageDAO->createNewMessage($message);
    }


    public function getMessage($message){

        return $this->messageDAO->getMessage($message);
    }
}