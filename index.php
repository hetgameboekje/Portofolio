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
            'html',
            'navbar'
        ];

        foreach ($baseExtension as $row) {
            self::getExtension('templates', $row, 'controller');
        }

        $url = array_filter(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
        $extension = empty($url[0]) ? 'dashboard' : $url[0];
        // Now this calls getExtension for extension controllers:
        self::extension($extension);

        self::getExtension('templates', 'footer', 'controller');
    }

    private static function extension($input)
    {
        // Call the unified logic
        self::getExtension('extension', $input, 'controller');
    }

    private static function getExtension($folder, $input, $type)
    {
        // Basic sanity checks
        $allowedFolders = [
            'templates',
            'extension',
            'lib',
            'config'
        ];
        $allowedTypes = [
            'controller',
            'model',
            'view'
        ];

        if (!in_array($folder, $allowedFolders, true) || !in_array($type, $allowedTypes, true)) {
            $class = 'templates\\unknown\\controller';
        } else {
            // Optionally sanitize/whitelist inputs
            $input = preg_replace('/[^a-zA-Z0-9_]/', '', $input);
            $class = $folder . '\\' . $input . '\\' . $type;
        }

        if (class_exists($class)) {
            $controller = new $class();
            $controller->init();
        } else {
            // Fallback
            $fallback = 'templates\\unknown\\controller';
            $controller = new $fallback();
            $controller->init();
        }
    }
}

Init::init();
