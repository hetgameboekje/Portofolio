<?php
namespace extension\dashboard;

use extension\dashboard\model\dashboardmodel;

class controller {
    private $data = [];
    private $model;

    public function __construct() {
        $this->model = new DashboardModel();
    }

    public function init() {
        $this->details();
    }

    public function details() {
        $this->data = $this->model->details();
        $this->subview('dashboard');
    }

    private function subview($template) {
        include __DIR__ . '/view/' . $template . '.php';
    }
}
