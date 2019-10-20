<?php

namespace Admin\App\Models;

use App\Models\Database;

class UserModel extends Database{

    public function getAll(){
        $sqlSelect = "SELECT * FROM users";
        /**
         * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql
         * tham số 1 chính là biến kết nối CSDL $connection
         * tham số 2 chính là câu query sql
         */
        $result = mysqli_query($this->connection, $sqlSelect);

        return $result;
    }

    public function getSingle($user_id = 0){

        $sqlSelect = "SELECT * FROM users WHERE id = " . $user_id;
        /**
         * mysqli_query() là hàm thực hiện câu lệnh mysql
         */
        $result = mysqli_query($this->connection, $sqlSelect);
        /**
         * mysqli_fetch_assoc() : trả về kết quả truy vấn sql dưới dạng mảng
         */
        $row = mysqli_fetch_assoc($result);

        return $row;
    }
}