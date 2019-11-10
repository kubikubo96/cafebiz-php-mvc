<?php
include_once "app/views/partial/header.php";
?>
<div id="wrapper">
    <?php
    include_once "app/views/partial/slidebar.php";
    ?>
    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a>Users</a>
                </li>
            </ol>
            <!--        thêm sửa xóa-->
            <div class="row">
                <div class="col-md-12">
                    <h5><a href="index.php?controller=users&action=create">Add user</a></h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">password</th>
                            <th scope="col">created_at</th>
                            <th scope="col">
                                actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /**
                         * mysqli_num_rows() truyền vào tham số của hàm mysqli_query()
                         * được sử dụng để đếm số bản ghi trả về của câu SQL
                         */
                        if (mysqli_num_rows($result) > 0) {
                            /**
                             * mysqli_fetch_assoc() truyền vào biến của mysqli_query()
                             * nó dùng để lấy ra từng bản ghi trả về của câu SQL
                             * $row sẽ là 1 bản ghi trong bảng
                             * vòng lặp while sẽ chạy cho đến khi hết các bản ghi trong bảng trả về từ câu SQL
                             */
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <th scope="col"><?= $row['id_user'] ?></th>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['password'] ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td>
                                        <div>
                                            <a class=""
                                               href="index.php?controller=users&action=edit&id_user=<?= $row['id_user'] ?>"
                                            >Edit</a>
                                        </div>
                                        <div>
                                            <a class=""
                                               href="index.php?controller=users&action=delete&id_user=<?= $row['id_user'] ?>"
                                               onclick='return xacnhan();'>Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<br> Không có bản ghi nào trong CSDL";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->
<?php
include_once "app/views/partial/footer.php";
?>