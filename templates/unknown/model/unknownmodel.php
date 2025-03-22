<?php

namespace templates\unknown\model;

use templates\html\model\htmlmodel;

class unknownmodel {
    private $htmlModel;

    public function __construct() {
        $this->htmlModel = new htmlmodel();
    }

    public function details() {
        $this->htmlModel->setTitle('test');

    }
}
