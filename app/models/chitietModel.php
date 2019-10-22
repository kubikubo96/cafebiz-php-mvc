<?php

namespace Apps\Models;

class chitietModel extends database {

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
}