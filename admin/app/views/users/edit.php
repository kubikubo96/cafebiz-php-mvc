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
                    <a>Edit user</a>
                </li>
            </ol>
            <!-- edit -->
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if (isset($errors) && is_array($errors) && !empty($errors)) {
                        ?>
                        <div class="alert alert-danger">
                            <?php echo implode("<br>", $errors) ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div>
                        <!-- ở đây action phải chuyển đến c_update.php để xử lý-->
                        <form name="edit" action="" method="post">
                            <input type="hidden" name="id_user" value="<?=(int) $users['id_user']?>">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="<?= $users["name"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="<?= $users["email"] ?>">
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label for="password">Password</label>-->
<!--                                <input type="password" class="form-control" name="password" id="password"-->
<!--                                       value="--><?//= $users["password"] ?><!--">-->
<!--                            </div>-->
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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