<?php
include_once "app/views/partial/header.php";
?>

<div id="wrapper">
    <!-- Sidebar -->
    <?php
    include_once "app/views/partial/slidebar.php";
    ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a>Add post</a>
                </li>
            </ol>
            <!--        thêm mới người dùng-->
            <div class="row">
                <div class="col-md-12">
                    <form name="create" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tieude">Tiêu đề</label>
                            <input type="text" class="form-control" name="tieude" id="tieude" value="">
                        </div>
                        <div class="form-group">
<!--                            <label for="noidung">Nội dung</label>-->
                            <p>Nội dung</p>
<!--                            <input style="height: 250px;" type="text" class="form-control" name="noidung" id="email" value="">-->
<!--                            <textarea name="noidung" id="post_content" style="width: 100%; height: 200px;"></textarea>-->
                            <textarea name="noidung" id="noidung" style="width: 100%;height: 200px;"></textarea>
                            <script>CKEDITOR.replace('noidung');</script>
                        </div>
                        <div class="form-group">
                            <label for="hinh">Hình</label>
<!--                            lưu ý : để update được file thì trên form phải có enctype="multipart/form-data-->
                            <input type="file" class="form-control" name="f_hinh" id="hinh" value="">
                        </div>
<!--                        <div class="form-group">-->
<!--                            <label for="created_at">Created_at</label>-->
<!--                            <input type="datetime-local" class="form-control" name="created_at" id="created_at" value="">-->
<!--                        </div>-->
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
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