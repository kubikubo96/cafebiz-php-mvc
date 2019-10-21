<?php

namespace App\Models;

use App\Models\database;

class loginModel extends database
{

    public function getData($email, $md5_password)
    {

        $sqlSelect = "SELECT * FROM users WHERE email = '$email'and password = '$md5_password'";

        $result = mysqli_query($this->connection, $sqlSelect);

//        $row = mysqli_fetch_object($result);
//        var_dump($row);die;
        /**
         * mysqli_fetch_assoc() : trả về kết quả truy vấn sql dưới dạng mảng
         */
        $row = mysqli_fetch_assoc($result);
//            var_dump($row);die;
        return $row;
    }
}