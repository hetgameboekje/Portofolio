<?php
namespace templates\footer;

use templates\footer\model\footermodel;

class controller {
    private $data = [];
    private $model;

    public function __construct() {
        $this->model = new footermodel();
    }

    public function init() {
        $this->details();
    }

    public function details() {
        $this->data = $this->model->details();
        $this->subview('footer');
    }

    private function subview($template) {
        include __DIR__ . '/view/' . $template . '.php';
    }
}
