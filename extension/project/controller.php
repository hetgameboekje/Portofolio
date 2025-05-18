<?php
namespace extension\project;

use templates\html\controller as HtmlController;
use extension\project\model\projectmodel;

class controller {
    private $data = [];
    private $model;

    public function __construct() {
        $this->model = new projectModel();
    }

    public function init() {
        $this->details();
    }

    public function details() {
        $htmlController = new HtmlController();
        $htmlController->setTitle('Projecten');

        // Sla de tabel op in $this->data
        $this->data['table'] = $this->model->createTable();

        // Geef de view weer
        $this->subview('project');
    }

    private function subview($template) {
        // Maak $this->data beschikbaar in de view
        $data = $this->data;
        include __DIR__ . '/view/' . $template . '.php';
    }
}
