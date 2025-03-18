<?php
namespace extension\dashboard\controller;

use extension\dashboard\model\DashboardModel;

class Controller {
    private $model;

    public function __construct() {
        // Instantiate the model class
        $this->model = new DashboardModel();
    }

    public function index() {
        echo "Dashboard home";
        // Optionally, call the model method
        // echo $this->model->getData();
    }

    public function create() {
        $this->model->createUser();
    }

    public function remove() {
        $this->model->deleteUser();
    }

    public function update() {
        $this->model->updateUser();
    }
}
