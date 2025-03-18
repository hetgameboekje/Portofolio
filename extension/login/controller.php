<?php
namespace extension\login\controller;

use extension\login\model\LoginModel;

class LoginController {
    private $model;

    public function __construct() {
        $this->model = new LoginModel();
    }

    public function index() {
        // Default method
        echo "Login page";
    }

    public function create() {
        $this->model->createUser();
        echo "User created";
    }

    public function remove() {
        $this->model->deleteUser();
        echo "User removed";
    }

    public function update() {
        $this->model->updateUser();
        echo "User updated";
    }
}
