<?php

namespace G11Display\View;

use Id1354fw\View\AbstractRequestHandler;
use G11Display\View\Controller;

class Message extends AbstractRequestHandler {

    protected function doExecute() {

        $controller = new Controller();
        $message = $controller->getMessage();
        $this->addVariable("message", $message);


        return "message";
    }

}
