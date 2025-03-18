<?php
namespace extension\dashboard\model;

class DashboardModel {

    public function createUser() {
        echo "User created";
    }

    public function deleteUser() {
        echo "User deleted";
    }

    public function updateUser() {
        echo "User updated";
    }

    // Example of a method you could call from the controller
    public function getData() {
        return "Sample data from model";
    }
}
