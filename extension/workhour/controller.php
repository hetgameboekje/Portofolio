<?php
namespace extension\workhour;

use templates\html\controller as HtmlController;
use extension\workhour\model\workhourmodel;


class controller{
    private $data = [];
    private $model;

    public function __construct() {
        $this->model = new WorkhourModel();
    }

    public function init() {
        $this->details();
    
   
    }

    public function details() {
        $htmlController = new HtmlController();

        //$this->data = $this->model->details();
        $htmlController->setTitle('workhour');
        $this->subview('workhour');
    }

    private function subview($template) {
        include __DIR__ . '/view/' . $template . '.php';
    }
}
