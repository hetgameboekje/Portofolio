<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Autoloader
spl_autoload_register(function ($className) {
    $baseDir = __DIR__ . '/';
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = $baseDir . $className . '.php';
    
    echo "Trying to load: $file<br>"; // Debug output
    
    if (file_exists($file)) {
        require_once $file;
        echo "Successfully loaded: $file<br>"; // Debug output
    } else {
        echo "File not found: $file<br>"; // Debug output
    }
});

class Init {
    public static function init()
    {
        $url = array_filter(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
        $extension = $url[0] ?? 'dashboard'; // Only works for /dashboard URLs
        
        // Better solution:
        $extension = empty($url[0]) ? 'dashboard' : $url[0];
        
        echo "Requested extension: $extension<br>";
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
            echo "Trying to load class: $class<br>"; // Debug output
            if (class_exists($class)) {
                echo "Class exists, calling init()<br>"; // Debug output
                $class::init(); // Call the init function of the loaded extension
            } else {
                echo "Class does not exist<br>"; // Debug output
            }
            return;
        }
    
        echo '404 not found';
    }
}

Init::init();
