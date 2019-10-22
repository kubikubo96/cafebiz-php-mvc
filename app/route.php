<?php

namespace Apps;

use Apps\Controllers\chitietController;
use Apps\Controllers\indexController;

class route{

    /**
     * index admin
     */
    public function indexRoute(){
        $controller = new indexController();
        $controller->index();

    }
    public function chitietRoute(){
        $controller = new chitietController();
        $controller->index();

    }
}
