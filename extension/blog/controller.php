<?php
namespace extension\blog;

use templates\html\controller as HtmlController;
use extension\blog\model\blogmodel;


class controller{
    private $data = [];
    private $model;

    public function __construct() {
        $this->model = new BlogModel();
    }

    public function init() {
        $this->details();
    
   
    }

    public function details() {
        $htmlController = new HtmlController();

        //$this->data = $this->model->details();
        $htmlController->setTitle('blog');
        $this->subview('blog');
    }

    private function subview($template) {
        include __DIR__ . '/view/' . $template . '.php';
    }
}

//gewerkt aan de validatie van de excel rijen 
// Ook een todo bij gehouden om alle fouten in kaart te brengen waarbij ik in het achtergrond script de validaties verbeterd heb en wat in de database heb aangepast