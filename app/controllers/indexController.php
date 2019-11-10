<?php

namespace Apps\Controllers;

use Apps\Models\indexModel;

class indexController{

    //Có xử lý phân trang
    public function index(){

//        echo "<br>" . __METHOD__;

        $model = new indexModel();

        $result = $model->getAll();

//        $total_records : tổng số tin
        $total_records = $result->num_rows;

//      echo $total_records;
//      $current_page : trang hiện tại
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        $limit = 4;

        //$total_page : số tin trên 1 trang
        $total_page = ceil($total_records / $limit);

        if ($current_page > $total_page){
            $current_page = $total_page;
        }else if ($current_page < 1){
            $current_page = 1;
        }
        // $start : vị trí để chạy sql.
        $start = ($current_page - 1) * $limit;

        $result = $model->getAll($start,$limit);
        $hotNew = $model->getSingleLimit();
        $threeNew = $model->getThreeLimit();

        include_once "app/views/index/index.php";


    }
}