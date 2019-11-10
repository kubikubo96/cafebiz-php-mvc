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
                    <a>Edit post</a>
                </li>
            </ol>
            <!-- edit -->
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <!-- ở đây action phải chuyển đến c_update.php để xử lý-->
                        <form name="edit" action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_post" value="<?= $post['id_post'] ?>">
                            <div class="form-group">
                                <label for="tieude">Tiêu đề</label>
                                <input type="text" class="form-control" name="tieude" id="tieude"
                                       value="<?= $post['tieude'] ?>">
                            </div>
                            <p>Nội dung</p>
                            <textarea name="noidung" id="noidung" style="width: 100%; height: 200px">
                            <?= $post['noidung'] ?>
                        </textarea>
                            <script>CKEDITOR.replace('noidung');</script>
                            <div class="form-group">
                                <label for="hinh">Hình</label>
<!--                            lưu ý : để update được file thì trên form phải có enctype="multipart/form-data-->
                                <input type="file" class="form-control" name="f_hinh" id="hinh"
                                       value="<?= $post['hinh'] ?>">
                            </div>
                            <div style="margin-bottom: 20px;">
                                <img src="../assets/images/<?= $post['hinh'] ?>" width="100px" height="100px"/>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
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