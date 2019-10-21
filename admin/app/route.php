<?php

namespace App;

use App\Controllers\indexController;
use App\Controllers\loginController;
use App\Controllers\postController;
use App\Controllers\registerController;
use App\Controllers\userController;

class route {
    /**
     * Register
     */
    public function registerRoute(){
        //url : index.php?controller=register&action=index
        $controller = new registerController();
        $controller->index();
    }
    /**
     * Login
     */
    public function loginRoute(){
        //url : index.php?controller=login&action=index
        if($_REQUEST["controller"] == "login"){
            $controller = new loginController();
            if ($_REQUEST["action"] == 'index') {
                $controller->index();
            }

            if ($_REQUEST["action"] == 'logout') {
                $controller->logout();
            }
        }

    }
    /**
     * index admin
     */
    public function indexRoute(){
        //url : index.php?controller=index&action=index
        $controller = new indexController();
        $controller->index();

    }

    /**
     * users
     */
    public function  userRoute(){

        //$_REQUEST : trả về url
        if ($_REQUEST["controller"] == 'users') {
            $controller = new userController();

            if ($_REQUEST["action"] == 'index') {
                $controller->index();
            }

            if ($_REQUEST["action"] == 'create') {
                $controller->create();
            }
            if ($_REQUEST["action"] == 'edit'){
                $controller->edit();
            }
            if($_REQUEST["action"] == 'delete'){
                $controller->deleteAction();
            }
        }

    }

    /**
     * posts
     */
    public function postRoute(){
        //$_REQUEST : trả về url
        if ($_REQUEST["controller"] == 'posts') {

            $controller = new postController();
            if($_REQUEST["action"] == 'index'){
                $controller->index();
            }
            if($_REQUEST["action"] == 'create'){
                $controller->create();
            }
            if($_REQUEST["action"] == 'edit'){
                $controller->edit();
            }
            if($_REQUEST["action"] == 'delete'){
                $controller->deleteAction();
            }
        }
    }
//    public function run() {
//
//        $controller = isset($_REQUEST["controller"]) ? trim($_REQUEST["controller"]) : "users";
//        $controller = ucfirst($controller); // users
//        $controllerName = "App\\Controllers\\".$controller."Controller";
//        // Admin\App\Controllers\EmployeeController
//
//
//        echo '<br>$controller : ' . $controller;
//        echo '<br>$controllerName : ' . $controllerName;
//
//        if (class_exists($controllerName)) {
//            $controllerObject = new $controllerName();
//
//            //trim: cắt khoảng trắng thừa ở đầu và cuối
//            $action = isset($_REQUEST["action"]) ? trim($_REQUEST["action"]) : 'index';
//            echo '<br>$action : ' . $action;
//
//            if (method_exists($controllerObject, $action)) {
//                /**
//                 * $controllerObject->index()
//                 * $controllerObject->edit()
//                 * $controllerObject->delete()
//                 */
//                return $controllerObject->$action();
//            } else {
//                $controllerObject = new errorController();
//
//                return $controllerObject->redirect404();
//            }
//        } else {
//            $controllerObject = new errorController();
//
//            return $controllerObject->redirect404();
//        }
//
//
//
//    }

}