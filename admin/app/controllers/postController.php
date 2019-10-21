<?php

namespace App\Controllers;

//Import namespace khác vào namespace hiện tại
use App\Models\postModel;

class postController{

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
        $model = new postModel();
        $result = $model->getAll();

        include_once "app/views/posts/index.php";
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
            $model = new postModel();

            $status = $model->store($_POST);
            if ($status) {
                header("Location: index.php?controller=posts&action=index");
                exit;
            }
            $errors[] = "Lưu thất bại";
        }
        include_once "app/views/posts/create.php";

    }

    public function edit() {

        $errors = array();
//        echo "<br>" . __METHOD__;

        if (isset($_POST) && !empty($_POST)) {
            $model = new postModel();

            $status = $model->update($_POST);
            if ($status) {
                header("Location: index.php?controller=posts&action=index");
                exit;
            }
            $errors[] = "Sửa thất bại";
        }

        if (isset($_GET["id_post"])) {
            $id_post = (int) $_GET["id_post"];

            $model = new postModel();

            $post = $model->getSingle($id_post);
        }

        include_once "app/views/posts/edit.php";
    }

    public function deleteAction() {

        if (isset($_GET["id_post"])) {

            $id_post = $_GET['id_post'];
            $model = new postModel();

            if ($id_post > 0) {
                $model->delete($id_post);
                header("Location: index.php?controller=posts&action=index");
                exit;
            }
        }
    }

}

