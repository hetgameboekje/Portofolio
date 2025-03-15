<?php

class Init {

    public static function init()
    {
        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        
        $extension = $url[0] ?? null;
        
        self::extension($extension);
    }

    private static function extension($input)
    {
        if ($input == '') {
            require './extension/dashboard/controller.php';
            \extension\dashboard\Controller::init(); // Call the init function
            return;
        }
    
        $validExtensions = [
            'login',
            'dashboard'
        ];
    
        if (in_array($input, $validExtensions)) {
            echo "Loading extension: $input\n";
            require './extension/' . $input . '/controller.php';
            $class = '\\extension\\' . $input . '\\Controller';
            if (class_exists($class)) {
                echo "Class exists: $class\n";
                try {
                    $class::init(); // Call the init function of the loaded extension
                } catch (Exception $e) {
                    echo "Error calling init: " . $e->getMessage() . "\n";
                }
            } else {
                echo "Class does not exist: $class\n";
            }
            return;
        }
    
        echo '404 not found';
    }
}

Init::init();

?>
