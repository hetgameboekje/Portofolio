<?php
namespace templates\unknown;

use templates\unknown\model\unknownmodel;

class controller {
    private $data = [];
    private $model;

    public function __construct() {
        $this->model = new unknownmodel();
    }

    public function init() {
        $this->details();
    }

    public function details() {
        $this->data = $this->model->details();
        $this->subview('unknown');
    }

    private function subview($template) {
        include __DIR__ . '/view/' . $template . '.php';
    }
}
