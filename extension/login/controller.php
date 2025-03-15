<?php
namespace extension\login\controller;

use extension\login\model\loginModel\loginModel as LoginModel;

class Controller {

    public static function init()
    {
        echo "Inside init method\n";
        print_r('1');
        
        $url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

        $modelName = $url[0] ?? 'login'; 
        $modelPath = __DIR__ . '/../model/' . ucfirst($modelName) . 'Model.php';
        print_r('2');
        
        if (file_exists($modelPath)) {
            require_once $modelPath;  
            echo "Model loaded: $modelPath\n";
        } else {
            http_response_code(404);
            die("Model not found: " . $modelPath);
        }

        $action = $url[1] ?? 'details';  

        if (method_exists(self::class, $action)) {
            try {
                self::$action();  
            } catch (Exception $e) {
                echo "Error calling action: " . $e->getMessage() . "\n";
            }
        } else {
            echo 'Action not found';
        }
    }

    // Action methods
    public static function create() {
        echo "Create action\n";
    }

    public static function remove() {
        echo "Remove action\n";
    }

    public static function update() {
        echo "Update action\n";
    }

    public static function details() {
        echo "Details action\n";
        LoginModel::details();  
    }
}

?>
