<?php

class Init {

    public static function init()
    {
        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        
        $extension = $url[0] ?? null;
        // $action = $url[1] ?? null;
        // $id = $url[2] ?? null;
        // $subaction = $url[3] ?? null;
        // $subid = $url[4] ?? null;

        self::extension($extension);
    }

    private static function extension($input)
    {
        if ($input == '') {
            require './extension/dashboard/controller.php';
            \extension\dashboard\Controller::init(); // Call the init function
            return;
        }
    
        $validExtensions = ['todo', 'dashboard'];
    
        if (in_array($input, $validExtensions)) {
            require './extension/' . $input . '/controller.php';
            $class = '\\extension\\' . $input . '\\Controller';
            if (class_exists($class)) {
                $class::init(); // Call the init function of the loaded extension
            }
            return;
        }
    
        echo '404 not found';
    }
}

Init::init();

?>
