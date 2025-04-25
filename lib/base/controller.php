<?php
namespace lib\base;

use lib\base\model\basemodel;

class basecontroller {
    private $data = [];
    private $model;

    public function __construct() {
        $this->model = new basemodel();
    }

    protected function getViewPath() {
        return __DIR__ . '/view/';
    }
    
    public function addsubview($template) {
        include $this->getViewPath() . $template . '.php';
    }
    
}
