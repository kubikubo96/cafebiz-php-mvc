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
                        <a>Posts</a>
                    </li>
                </ol>
                <!--        thêm sửa xóa-->
                <div class="row">
                    <div class="col-md-12">
                        <h5><a href="index.php?controller=posts&action=create">Add post</a></h5>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Hình</th>
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
                                        <th scope="col"><?= $row['id_post'] ?></th>
                                        <td><?= $row['tieude'] ?></td>
                                        <td>
                                            <div style=" height: 300px;overflow-x: scroll;">
                                                <?= $row['noidung'] ?>
                                            </div>
                                        </td>
                                        <td><img src="../assets/images/<?= $row['hinh'] ?>" width="100%"/></td>
                                        <td><?= $row['created_at'] ?></td>
                                        <td>
                                            <div>
                                                <a class=""
                                                   href="index.php?controller=posts&action=edit&id_post=<?= $row['id_post'] ?>">Edit</a>
                                            </div>
                                            <div>
                                                <a class=""
                                                   href="index.php?controller=posts&action=delete&id_post=<?= $row['id_post'] ?>"
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
                    <div class="" style="margin: 0 auto; text-align: center;">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <?php
                                    // PHẦN HIỂN THỊ PHÂN TRANG
                                    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                                    if ($current_page > 1 && $total_page > 1) { ?>
                                        <a class="page-link" href="
                                               index.php?controller=posts&action=index&page=<?= ($current_page - 1) ?>"
                                           aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    <?php } ?>
                                </li>
                                <?php
                                // Lặp khoảng giữa
                                for ($i = 1; $i <= $total_page; $i++) {
                                    if ($i == $current_page) { ?>
                                        <li class="page-item"><a class="page-link"
                                                                 href="index.php?controller=posts&action=index&page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                        <?php
                                    } else { ?>
                                        <li class="page-item"><a class="page-link"
                                                                 href="index.php?controller=posts&action=index&page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                        <?php
                                    }
                                } ?>
                                <li class="page-item">
                                    <?php
                                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                    if ($current_page < $total_page && $total_page > 1) {
                                        ?>
                                        <a class="page-link"
                                           href="index.php?controller=posts&action=index&page=<?= ($current_page + 1) ?>"
                                           aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </li>
                            </ul>
                        </nav>
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