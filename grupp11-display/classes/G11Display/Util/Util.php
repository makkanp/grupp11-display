<?php

namespace G11Display\Util;

class Util {

    public static function redirect($location) {
        \header("Location: " . $location);
    }

}
