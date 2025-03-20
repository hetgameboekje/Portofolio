<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function ($className) {
    $baseDir = __DIR__ . '/';
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = $baseDir . $className . '.php';
    
    error_log("Trying to load: $file"); // Debug line
    
    if (file_exists($file)) {
        require_once $file;
    } else {
        error_log("Autoload failed: File $file not found");
    }
});


class Init {
    public static function init()
    {
        $url = array_filter(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
        $extension = empty($url[0]) ? 'dashboard' : $url[0];
        
        self::extension($extension);
    }

    private static function extension($input)
    {
        $validExtensions = [
            'login',
            'dashboard'
        ];
    
        if (in_array($input, $validExtensions)) {
            $class = 'extension\\' . $input . '\\controller';
            
            if (class_exists($class)) {
                // Instantiate controller and call init()
                $controller = new $class();
                $controller->init(); // Changed to instance method call
            } else {
                echo "Class does not exist<br>";
            }
            return;
        }
    
        echo '404 not found';
    }
}

Init::init();
