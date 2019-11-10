<?php

namespace App\Models;

use App\Models\database;

class postModel extends database
{

    //lấy tất cả bản ghi
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

        //Xử lý upload hình ảnh
        $f = $_FILES['f_hinh'];

//        echo "<pre>";
//        print_r($f);
//        echo "</pre>"; die;

        //Tạo biến tạm
        $hinh = $f['name'];
        $type = $f['type'];
        $size = $f['size'];
        $error = $f['error'];

        if (($type == 'image/jpg' || $type == 'image/png' || $type == 'image/jpeg') && $error == 0 && $size <= 200000000) {
            $ketqua = move_uploaded_file($f['tmp_name'], "../assets/images/$hinh");
            // di chuyển file hình đã upload lên vào bên trong thư mục images
        }
        if (empty($tieude) || empty($noidung) || ($ketqua != true)) {
            return false;
        }

        $sqlInsert = "INSERT INTO posts (tieude, noidung, hinh) VALUES ('$tieude', '$noidung', '$hinh')";

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
        $id_post = (int)$data['id_post'];

        if ($_FILES['f_hinh']['name'] == "") {


            if (empty($tieude) || empty($noidung)) {
                return false;
            }

            $sql = "UPDATE posts SET tieude='$tieude',noidung='$noidung' WHERE id_post = " . (int)$id_post;

            if (mysqli_query($this->connection, $sql)) {
//                echo "Update thành công !";
//                /**
//                 * hàm header được dùng để chuyển hương url
//                 */
//                header('Location: index.php?controller=posts&action=index');
//                exit;
                return true;
            } else {
                return false;
            }

        } else {

            //Xử lý upload hình ảnh
            $f = $_FILES['f_hinh'];

            $hinh = $f['name'];
//        $type = $f['type'];
//        $size = $f['size'];
            $error = $f['error'];

            if ($error == 0) {
                $ketqua = move_uploaded_file($f['tmp_name'], "../assets/images/$hinh");
                // di chuyển file hình đã upload lên vào bên trong thư mục images
            }

            if (empty($tieude) || empty($noidung) || ($ketqua != true)) {
                return false;
            }

            $sql = "UPDATE posts SET tieude='$tieude',noidung='$noidung', hinh='$hinh' WHERE id_post = " . (int)$id_post;

            if (mysqli_query($this->connection, $sql)) {
//            echo "Update thành công !";
//            /**
//             * hàm header được dùng để chuyển hương url
//             */
//            header('Location: index.php?controller=posts&action=index');
//            exit;
                return true;
            } else {
                return false;
            }

        }
    }

    public function delete($id_post)
    {

        $sqlDelete = "DELETE FROM posts WHERE id_post = $id_post";
        if (mysqli_query($this->connection, $sqlDelete)) {
            return true;
        }
        return false;
    }


}