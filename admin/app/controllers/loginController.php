<?php

namespace App\Controllers;

session_start();

use App\Models\database;
use App\Models\loginModel;

class loginController extends database{

    public function index(){
        $errors = array();

        if (isset($_POST) && !empty($_POST)) {
            $email = $_POST["email"];
            $md5_password = md5($_POST["password"]);

            $model = new loginModel();
            $user = $model->getData($email,$md5_password);

//            var_dump($user);die;
            if($user == true){
                $_SESSION["login_success"] = true;
                header("Location: index.php?controller=index&action=index");
                if(!empty($errors)){
                    unset($errors);
                }
                exit;
            }else{
                $errors[] = "Dữ liệu đăng nhập không đúng !";
            }
        }

        include_once "app/views/login/index.php";
    }

    public function logout(){
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        header("Location: index.php?controller=login&action=index");
        exit;
    }
}