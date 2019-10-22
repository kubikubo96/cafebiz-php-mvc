<?php

namespace Apps\Controllers;

use Apps\Models\chitietModel;

class chitietController{

    function index(){
        if (isset($_GET["id_post"])) {
            $id_post = (int) $_GET["id_post"];

            $model = new chitietModel();

            $post = $model->getSingle($id_post);
        }
        include_once "app/views/chitiet/index.php";
    }
}