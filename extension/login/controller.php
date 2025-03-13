<?php

namespace extension\login;

class Controller {
    public static function init()
    {
        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        // print_r($url); // Debugging: check URL structure
        $model =  'model/'.$url[0] .'model.php'; 
        // print_r($model);
        require $model;
    }

    //crud
    public function create(){}
    public function remove(){}
    public function update(){}
    public function details(){
        $this->init();
        loginModel->detailsLoginModel();
    }

    
}

?>
