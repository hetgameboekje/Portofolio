<?php
namespace templates\html;

use templates\html\model\htmlmodel;

class controller {
    private $model;
    private $data = [];

    public function __construct() {
        $this->model = new htmlmodel();
        $this->subview('html');
    }

    public static function init() {
    }

    public function setTitle($title) {
        $this->model->setTitle($title);
        $this->data['title'] = $title;
    }

    private function subview($template, $data = null) {
        extract($this->data);
        include __DIR__ . '/view/' . $template . '.php';
    }
}
