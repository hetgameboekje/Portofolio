<?php
namespace templates\navbar;

use templates\navbar\model\navbarmodel;

class controller {
    private $data = [];
    private $model;

    public function __construct() {
        $this->model = new navbarmodel();
    }

    public function init() {
        $this->details();
    }

    public function details() {
        $this->data = $this->model->details();
        $this->subview('navbar');
    }

    private function subview($template) {
        include __DIR__ . '/view/' . $template . '.php';
    }
}
