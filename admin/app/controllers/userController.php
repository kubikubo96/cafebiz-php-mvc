<?php

namespace App\Controllers;

//Import namespace khác vào namespace hiện tại
use App\Models\userModel;

class userController{

    public function index(){
        if (!isset($_SESSION["login_success"]) || ($_SESSION["login_success"] != true)) {
            // chuyển hướng redirect trong php sử dụng hàm header
            header("Location: index.php?controller=login&action=index");
            exit;
        }
        /** __METHOD__
         * Đại diện cho tên của phương thức lớp mà nó được sử dụng.
         * Tên phương thức được trả về khi nó được khai báo.
         */
//        echo "<br>".__METHOD__;
        $model = new userModel();
        $result = $model->getAll();

        include_once "app/views/users/index.php";
    }

    public function create(){
        if (!isset($_SESSION["login_success"]) || ($_SESSION["login_success"] != true)) {
            // chuyển hướng redirect trong php sử dụng hàm header
            header("Location: index.php?controller=login&action=index");
            exit;
        }
//        echo "<br>" . __METHOD__;
        $errors = array();

        if (isset($_POST) && !empty($_POST)) {
            $model = new userModel();

            $status = $model->store($_POST);
            if ($status) {
                header("Location: index.php?controller=users&action=index");
                exit;
            }
            $errors[] = "Lưu thất bại";
        }
        include_once "app/views/users/create.php";

    }

    public function edit() {
        if (!isset($_SESSION["login_success"]) || ($_SESSION["login_success"] != true)) {
            // chuyển hướng redirect trong php sử dụng hàm header
            header("Location: index.php?controller=login&action=index");
            exit;
        }
        $errors = array();
//        echo "<br>" . __METHOD__;

        if (isset($_POST) && !empty($_POST)) {
            $model = new userModel();

            $status = $model->update($_POST);
            if ($status) {
                header("Location: index.php?controller=users&action=index");
                exit;
            }
            $errors[] = "Sửa thất bại";
        }

        if (isset($_GET["id_user"])) {
            $id_user = (int) $_GET["id_user"];

            $model = new userModel();

            $users = $model->getSingle($id_user);
        }

        include_once "app/views/users/edit.php";
    }

    public function deleteAction() {

        if (isset($_GET["id_user"])) {

            $id_user = $_GET['id_user'];
            $model = new userModel();

            if ($id_user > 0) {
                $model->delete($id_user);
                header("Location: index.php?controller=users&action=index");
                exit;
            }
        }
    }



}

