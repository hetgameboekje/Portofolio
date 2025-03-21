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
        $baseExtension = [
            'html'
            ,'navbar'
            
        ];
        foreach($baseExtension as $row){
            $class = 'templates\\' . $row . '\\controller';

        if (class_exists($class)) {
            $controller = new $class();
            $controller->init(); 
        } else {
            // return;
        }
    }

        $url = array_filter(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
        $extension = empty($url[0]) ? 'dashboard' : $url[0];
        self::extension($extension);
        
        $class = 'templates\\footer\\controller';
        $controller = new $class();
        $controller->init(); 
    }

    private static function extension($input)
    {
   
        $class = 'extension\\' . $input . '\\controller';
        if (class_exists($class)) {
            $controller = new $class();
            $controller->init(); // Changed to instance method call
        } else {
            http_response_code(404);
        }
    }
}

Init::init();
