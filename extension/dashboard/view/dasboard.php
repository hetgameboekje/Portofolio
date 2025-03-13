<?php

class DashboardView {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function render() {
        // Render the view with the provided data
        echo "<p>Data: " . $this->data . "</p>";
    }
}


?>