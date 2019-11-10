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
                    <a>Add user</a>
                </li>
            </ol>
            <?php
            if (isset($errors) && is_array($errors) && !empty($errors)) {
                ?>
                <div class="alert alert-danger">
                    <?php echo implode("<br>", $errors) ?>
                </div>
                <?php
            }
            ?>
            <!--        thêm mới người dùng-->
            <div class="row">
                <div class="col-md-12">
                    <form name="create" action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="">
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