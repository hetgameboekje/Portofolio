<?php

class DashboardController {
    public function index() {
        // Load the model and view
        $model = new DashboardModel();
        $view = new DashboardView($model->getData());
        $view->render();
    }
}

?>