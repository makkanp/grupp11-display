<?php
/**
 * Created by PhpStorm.
 * User: jenny
 * Date: 2017-04-19
 * Time: 09:48
 */

namespace G11Display\View;

use Id1354fw\View\AbstractRequestHandler;
use G11Display\Controller\Controller;
use G11Display\Util\Util;

class NewMessage extends AbstractRequestHandler
{
    private $message = null;
    private $submitted = null;

    public function setMessage($message){
        $this->message = $message;
    }

    public function setSubmitted($submitted){

        $this->submitted = $submitted;

        if(isset ($_POST['commentSubmit'])){
            $this->submitted = $_POST['submitted'];

        }
        //värdet av submit knappen, boolean om submit har tryckts =$submit
    }

    /**
     * Overriden by subclasses to perform the actual event handling, which typically means to call
     * appropriate method(s) in the controller. The event handling procedure is explained in the
     * class comment.
     *
     * @return string The path to the file with the next view. 'views/' is prepended to the
     *                 returned path and '.php' is appended to the path. No next view is rendered
     *                 if the return value is anything but a string with length one or more, nor if
     *                 no value at all is returned.
     */

    protected function doExecute()
    {
        $controller = new Controller();
        $controller->createNewMessage($this->message);

        Util::redirect(\G11Display\View\Message);
        return;
    }


}
