<?php

namespace App\Models;

use App\Models\database;

class postModel extends database
{

    //lấy tất cả bản ghi
    public function getAll()
    {
        $sqlSelect = "SELECT * FROM posts";
        /**
         * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql
         * tham số 1 chính là biến kết nối CSDL $connection
         * tham số 2 chính là câu query sql
         */
        $result = mysqli_query($this->connection, $sqlSelect);

        return $result;
    }

    // lấy 1 bản ghi
    public function getSingle($id_post = 0)
    {

        $sqlSelect = "SELECT * FROM posts WHERE id_post = " . $id_post;
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
    public function store($data)
    {

        $tieude = $data["tieude"];
        $noidung = $data["noidung"];
        $hinh = $data["hinh"];
        $created_at = $data["created_at"];

        if (empty($tieude) || empty($noidung)) {
            return false;
        }

        $sqlInsert = "INSERT INTO posts (tieude, noidung, hinh,created_at) VALUES ('$tieude', '$noidung', '$hinh','$created_at')";

        if (mysqli_query($this->connection, $sqlInsert)) {
            return true;
        }

        return false;
    }

    //update vào csdl
    public function update($data)
    {

        $tieude = $data["tieude"];
        $noidung = $data["noidung"];
        $hinh = $data["hinh"];
        $id_post = (int)$data['id_post'];

        if (empty($tieude) || empty($noidung)) {
            return false;
        }

        $sql = "UPDATE posts SET tieude='$tieude',noidung='$noidung',hinh='$hinh' WHERE id_post = " . (int)$id_post;

        echo $sql;
        if (mysqli_query($this->connection, $sql)) {
            echo "Update thành công !";
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php?controller=posts&action=index');
            exit;
        } else {
            return false;
        }
    }

    public function delete($id_post) {

        $sqlDelete = "DELETE FROM posts WHERE id_post = $id_post";
        if (mysqli_query($this->connection, $sqlDelete)) {
            return true;
        }
        return false;
    }


}