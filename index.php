<?php

include_once "app/models/database.php";
include_once "app/route.php";
include_once "app/controllers/indexController.php";
include_once "app/models/indexModel.php";
include_once "app/controllers/chitietController.php";
include_once "app/models/chitietModel.php";

/**
 * Lấy controller trên url
 */
if(isset($_GET["controller"])){
    $controller=$_GET["controller"];
}elseif(isset($_POST["controller"])){
    $controller=$_POST["controller"];
} else{
    $controller="index";
}

switch ($controller){
    case "chitiet":
        $route = new \Apps\route();
        $route->chitietRoute();
        break;
    default :
        $route = new \Apps\route();
        $route->indexRoute();
}