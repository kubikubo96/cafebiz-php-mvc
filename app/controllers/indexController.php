<?php

namespace Apps\Controllers;

use Apps\Models\indexModel;

class indexController{

    function index(){

//        echo "<br>" . __METHOD__;

        $model = new indexModel();
        $result = $model->getAll();

        include_once "app/views/index/index.php";
    }
}