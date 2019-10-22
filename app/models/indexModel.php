<?php

namespace Apps\Models;

class indexModel extends database {

    function getAll(){

        $sql = "SELECT * FROM posts";
        /**
         * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql
         * tham số 1 chính là biến kết nối CSDL $connection
         * tham số 2 chính là câu query sql
         */
        $result = mysqli_query($this->connection, $sql);

        return $result;
    }
}