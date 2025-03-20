<?php

namespace extension\dashboard;

use extension\dashboardmodel;

class Controller {
    public static function init()
    {
       
        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        print_r($url); // Debugging: check URL structure
        
    }
    public function details(){
        print_r(details_dashboard());
    }
}

?>
