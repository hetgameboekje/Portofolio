<?php

if(isset($_GET['m'])){
    $extention = $_GET['m'];
    $path = './extention/'.$extention.'/controller.php';
    include $path;
}
?><?php
// index.php

// Enable autoloading
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/extentions/' . strtolower($class) . '/controller.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

// Define routes
$routes = [
    'dashboard' => 'DashboardController',
];

// Get the requested extension from URL
if (isset($_GET['m'])) {
    $extension = $_GET['m'];
    // Validate the extension to prevent directory traversal
    if (array_key_exists($extension, $routes)) {
        $controllerClass = $routes[$extension];
        $controller = new $controllerClass();
        $controller->index(); // Call the index action by default
    } else {
        echo "Invalid extension";
    }
} else {
    // Default route
    $controller = new DashboardController();
    $controller->index();
}