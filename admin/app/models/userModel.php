<?php

namespace App\Models;

use App\Models\database;

class userModel extends database {

    //lấy tất cả bản ghi
    public function getAll()
    {
        $sqlSelect = "SELECT * FROM users";
        /**
         * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql
         * tham số 1 chính là biến kết nối CSDL $connection
         * tham số 2 chính là câu query sql
         */
        $result = mysqli_query($this->connection, $sqlSelect);

        return $result;
    }

    // lấy 1 bản ghi
    public function getSingle($id_user = 0){

        $sqlSelect = "SELECT * FROM users WHERE id_user = " . $id_user;
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

    //Insert vào csdl
    public function store($data) {

        $name = $data["name"];
        $email = $data["email"];
        $password = md5($data["password"]);

        if (empty($email) || empty($password)) {
            return false;
        }

        $sqlInsert = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        if (mysqli_query($this->connection, $sqlInsert)) {
            return true;
        }

        return false;
    }
    //update dữ liệu mới vào csdl
    public function update($data) {

        $name = $data["name"];
        $email = $data["email"];
        $id_user = (int)$data['id_user'];

        if (empty($name) || empty($email)) {
            return false;
        }

        $sql = "UPDATE users SET name='$name',email='$email' WHERE id_user = " . (int) $id_user;

        echo $sql;
        if (mysqli_query($this->connection, $sql)) {
            echo "Update thành công !";
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php?controller=users&action=index');
            exit;
        } else {
            return false;
        }
    }

    public function delete($id_user) {

        $sqlDelete = "DELETE FROM users WHERE id_user = $id_user";
        if (mysqli_query($this->connection, $sqlDelete)) {
            return true;
        }

        return false;

    }




}