<?php

namespace G11Display\View;

use Id1354fw\View\AbstractRequestHandler;
use G11Display\Util\Util;

class DefaultRequestHandler extends AbstractRequestHandler {

    protected function doExecute() {
        Util::redirect("/grupp11-display/G11Display/View/Message");
    }

}
