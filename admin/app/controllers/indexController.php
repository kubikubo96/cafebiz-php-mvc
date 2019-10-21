<?php

namespace App\Controllers;

class indexController
{

    public function index()
    {
        if (!isset($_SESSION["login_success"]) || ($_SESSION["login_success"] != true)) {
            // chuyển hướng redirect trong php sử dụng hàm header
            header("Location: index.php?controller=login&action=index");
            exit;
        }
        include_once "app/views/admin/index.php";
    }
}