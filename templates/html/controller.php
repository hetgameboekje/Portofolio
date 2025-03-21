<?php
namespace templates\html;

// use templates\navbar\model\navbarmodel;

class controller {
    private $data = [];
    private $model;

    public function __construct() {
        // $this->model = new navbarmodel();
        $this->subview('html');
    }
    public static function init(){
        
    }

    private function subview($template) {
        include __DIR__ . '/view/' . $template . '.php';
    }
}
