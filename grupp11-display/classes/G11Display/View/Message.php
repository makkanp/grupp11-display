<?php

namespace G11Display\View;

use Id1354fw\View\AbstractRequestHandler;
use G11Display\Controller\Controller;

class Message extends AbstractRequestHandler {

    protected function doExecute() {

        $controller = new Controller();
        $message = $controller->getMessage();

        if ($message != NULL){
            $this->addVariable("message", $message);
        }

        else{
            $this->addVariable("message", "Inga meddelanden");

        }



        return "message";
    }

}
