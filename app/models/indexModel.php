<?php

namespace Apps\Models;

class indexModel extends database {

    function getAll($start = -1, $limit = -1){

        $sql = "SELECT * FROM posts ";
        /**
         * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql
         * tham số 1 chính là biến kết nối CSDL $connection
         * tham số 2 chính là câu query sql
         */

        if($start>-1 && $limit>1){
            /**
             * Phải có dấu cách trước limit
             */
            $sql.=" LIMIT $start,$limit";
        }

        $result = mysqli_query($this->connection, $sql);

        return $result;
    }

    // lấy 1 bản ghi theo limit
    public function getSingleLimit()
    {
        $sqlSelect = "SELECT * FROM posts LIMIT 1 ";
        /**
         * mysqli_query() là hàm thực hiện câu lệnh mysql
         */
        $result = mysqli_query($this->connection, $sqlSelect);
        /**
         * mysqli_fetch_assoc() : trả về kết quả truy vấn sql dưới dạng mảng
         */
        $result = mysqli_fetch_assoc($result);

        return $result;
    }

    // lấy 3 bản ghi theo limit
    public function getThreeLimit()
    {
//        LIMIT 2,3 có nghĩa là bắt đầu từ 2 và lấy 3 giá trị
        $sqlSelect = "SELECT * FROM posts LIMIT 2,3 ";
        /**
         * mysqli_query() là hàm thực hiện câu lệnh mysql
         */
        $result = mysqli_query($this->connection, $sqlSelect);
        /**
         * mysqli_fetch_assoc() : trả về kết quả truy vấn sql dưới dạng mảng
         */

        return $result;
    }

}