<?php

/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 2017-04-18
 * Time: 16:24
 */
class Controller
{
    public function createNewMessage($message){


        return $this->MessageDAO->createNewMessage($message);
    }


    public function getMessage($message){

        return $this->NewMessage->getMessage($message);
    }
}