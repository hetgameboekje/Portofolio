<?php
namespace templates\html\model;

class htmlmodel {
    private $title = 'Timo';

    public function setTitle($newTitle) {
        $this->title = $newTitle;
    }

    public function getTitle() {
        return $this->title;
    }
}
