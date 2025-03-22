<?php
namespace templates\html;

use templates\html\model\htmlmodel;

class controller {
    private $model;
    private $data = [];

    public function __construct() {
        $this->model = new htmlmodel();

    }

    public function setTitle($title) {
        $this->model->setTitle($title);
        $this->data['title'] = $title;
    }

    public function init() {

        $this->subview('html');
    }



    private function subview($template) {
        include __DIR__ . '/view/' . $template . '.php';
    }
}
