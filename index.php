<?php

class Init {
    public static function init()
    {
        // Register the autoloader
        spl_autoload_register(function ($class) {
            $class = str_replace("\\", "/", $class);
            require_once __DIR__ . "/$class.php";
        });

        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        $extension = $url[0] ?? 'dashboard'; // Default to 'dashboard' if empty
        $method = $url[1] ?? 'index'; // Default method is 'index'

        self::loadExtension($extension, $method);
    }

    private static function loadExtension($input, $method)
    {
        $validExtensions = ['login', 'dashboard']; // Add more as needed

        if (!in_array($input, $validExtensions)) {
            http_response_code(404);
            die('404 Not Found');
        }

        // Ensure the correct file path and class name
        $controllerPath = "./extension/$input/controller.php";
        if (!file_exists($controllerPath)) {
            http_response_code(500);
            die("Controller file not found: $controllerPath");
        }

        require_once $controllerPath;
        $controllerClass = "\\extension\\$input\\controller\\Controller"; // Generic name since all are controller.php

        if (!class_exists($controllerClass)) {
            http_response_code(500);
            die("Controller class not found: $controllerClass");
        }

        // Instantiate the controller
        $controller = new $controllerClass();

        // Check if the method exists in the controller
        if (!method_exists($controller, $method)) {
            http_response_code(404);
            die("Method '$method' not found in $controllerClass");
        }

        // Call the method dynamically
        $controller->$method();
    }
}

// Run the handler
Init::init();
