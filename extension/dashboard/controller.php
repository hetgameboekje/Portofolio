<?php

namespace extension\dashboard;

class Controller {
    public static function init()
    {
        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        print_r($url); // Debugging: check URL structure
    }
}

?>
