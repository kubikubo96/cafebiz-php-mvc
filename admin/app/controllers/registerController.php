<?php

namespace App\Controllers;

//Import namespace khác vào namespace hiện tại
use App\Models\registerModel;

class registerController{

    public function index(){
//        echo "<br>" . __METHOD__;
        $errors = array();

        if (isset($_POST) && !empty($_POST)) {
            $model = new registerModel();

            $status = $model->store($_POST);
            if ($status) {
                echo "<div class='alert alert-success'>";
                echo "SignUp Success , login now !";
                echo "</div>";
            }else{
                $errors[] = "Đăng ký không thành công";
            }
        }
        include_once "app/views/register/index.php";

    }

}