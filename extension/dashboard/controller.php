<?php

namespace extension\dashboard;

use extension\dashboard\model\dashboardmodel;

class controller {
    public static function init()
    {
        self::details();
    }

    public static function details(){
        echo 'hello<br>';
        $model = new dashboardmodel();
        $model->details();
    }
}
