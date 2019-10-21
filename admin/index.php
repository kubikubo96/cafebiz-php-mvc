<?php
//include route
include_once "app/route.php";

//include database
include_once "app/models/database.php";

//include register
include_once "app/controllers/registerController.php";
include_once "app/models/registerModel.php";

//include login
include_once "app/controllers/loginController.php";
include_once "app/models/loginModel.php";

//include controller index của admin
include_once "app/controllers/indexController.php";

//include model+controller của users
include_once "app/controllers/userController.php";
include_once "app/models/userModel.php";

//include model+controller của posts
include_once "app/controllers/postController.php";
include_once "app/models/postModel.php";

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
/**
 * Lấy action trên url
 */
if(isset($_GET["action"])){
    $action = $_GET["action"];
}elseif (isset($_POST["action"])){
    $action = $_POST["action"];
} else{
    $action = "index";
}

//echo "controller = ".$controller;

switch ($controller) {
    case "register" :
        $route = new \App\route();
        $route->registerRoute();
        break;
    case "login" :
        $route = new \App\route();
        $route->loginRoute();
        break;
    case "users":
        $route = new \App\route();
        $route->userRoute();
        break;
    case "posts":
        $route = new \App\route();
        $route->postRoute();
        break;
	default:
        $route = new \App\route();
        $route->indexRoute();
	break;
}
