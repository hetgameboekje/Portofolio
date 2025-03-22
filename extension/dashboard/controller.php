<?php
namespace extension\dashboard;

use templates\html\controller as HtmlController;
use extension\dashboard\model\dashboardmodel;


class controller{
    private $data = [];
    private $model;

    public function __construct() {
        $this->model = new DashboardModel();
    }

    public function init() {
        $this->details();
    
   
    }

    public function details() {
        $htmlController = new HtmlController();

        //$this->data = $this->model->details();
        $htmlController->setTitle('dashboard');
        $this->subview('dashboard');
    }

    private function subview($template) {
        include __DIR__ . '/view/' . $template . '.php';
    }
}
