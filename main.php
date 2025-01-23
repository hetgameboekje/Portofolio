<?php
// main.php

// Parse the requested URL
$request = $_SERVER['REQUEST_URI'];
$request = trim($request, '/');

// Split URL into parts (e.g., dashboard/model)
$parts = explode('/', $request);

// Define base path
$baseDir = __DIR__;

// Define paths for controllers, models, and views
if (isset($parts[0])) {
    $module = $parts[0];
    $type = $parts[1] ?? 'controller'; // Default to controller if type isn't specified

    switch ($type) {
        case 'model':
            $file = "$baseDir/$module/model/{$module}model.php";
            break;
        case 'view':
            $file = "$baseDir/$module/view/{$module}view.php";
            break;
        default:
            $file = "$baseDir/$module/controller.php";
            break;
    }

    // Include the file if it exists
    if (file_exists($file)) {
        include $file;
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }
} else {
    echo "Welcome to the main page!";
}
?>
