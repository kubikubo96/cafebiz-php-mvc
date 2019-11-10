<!DOCTYPE html>
<html lang="en">
<head style="position: relative;">
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
    <script src="assets/js/file.js"></script>
    <title>Cafebiz</title>
</head>
<body>
<div class="wapper" style="">
    <div class="header" style="background-color: #343A40;width: 100%; position: fixed;z-index: 1000;">
        <div class="container">
            <nav style="margin: 0;padding:0;" class="navbar navbar-expand-lg navbar-light bg-dark">
                <a style="color:white;" class="navbar-brand" href="index.php?controller=index&action=index">
                    <!--                    <i style="margin-left: 15px;" class="fa fa-home"-->
                    <!--                       aria-hidden="true"></i>-->
                    <img src="assets/images/cafe.JPG" width="60px" height="30px"
                         style="border-radius: 50%; margin-left: 15px;"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i style="color: white;" class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li style="margin-left: 15px;" class="nav-item active">
                            <a style="color:white; font-size: 13px;font-weight: bold; " class="nav-link" href="#">THỜI
                                SỰ <span class="sr-only">(current)</span></a>
                        </li>
                        <li style="margin-left: 15px;" class="nav-item active">
                            <a style="color:white;font-size: 13px;font-weight: bold;" class="nav-link" href="#">KINH TẾ
                                VĨ MÔ <span class="sr-only">(current)</span></a>
                        </li>
                        <li style="margin-left: 15px;" class="nav-item active">
                            <a style="color:white;font-size: 13px;font-weight: bold;" class="nav-link" href="#">KINH
                                DOANH <span class="sr-only">(current)</span></a>
                        </li>
                        <li style="margin-left: 15px;" class="nav-item active">
                            <a style="color:white;font-size: 13px;font-weight: bold;" class="nav-link" href="#">CÔNG
                                NGHỆ <span class="sr-only">(current)</span></a>
                        </li>
                        <li style="margin-left: 15px;" class="nav-item active">
                            <a style="color:white;font-size: 13px;font-weight: bold;" class="nav-link" href="#">SỐNG
                                <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <div class="my-2 my-lg-0">
                        <a href="#" style="color:white; margin-right: 10px;font-size: 13px;font-weight: bold;">VIDEO</a>
                        <i style="color: white;" class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--        end header-->
    <div class="quangcao">
        <div class="container" style="text-align: center;padding-top: 60px;">
            <img src="assets/images/qc.JPG" width="85%"/>
        </div>
    </div>
    <div class="content">
        <div class="container" style="">
            <div class="row">
                <div class="col-md-9 c1" style=" ">
                    <h4 class="c2" style="">
                        <a href="index.php?controller=chitiet&action=index&id_post=<?= $hotNew['id_post'] ?>"
                           style="text-decoration: none;color: black;"><b>
                                <?= $hotNew['tieude'] ?>
                            </b>
                        </a>
                    </h4>
                    <div class="row" style="margin: 0">
                        <div class="col-md-5 c3" style="padding: 0px;margin-left: 0;">
                            <p class="c5" style="">Telepro - nền tảng kết nối tư vấn viên với doanh
                                nghiệp - đã từ chối 1 triệu USD của
                                Shark Liên để nhận 300.000 USD của Shark Dzung trong tập 13 Shark Tank Việt Nam. Nhờ
                                việc Telepro nhận được đầu tư của Shark Thủy trước đó, Shark Dzung mới đồng ý giảm số cổ
                                phần hoán đổi xuống 15%, để "Shark Thủy khỏi lăn tăn, không lại bảo Shark Dzung ép Shark
                                Thủy"</p>
                        </div>
                        <div class="col-md-7 c4" style="padding: 0px">
                            <img src="assets/images/<?= $hotNew['hinh'] ?>" width="100%"/>
                        </div>
                        <!--                        Vòng lặp cho 3 tin tức-->
                        <div class="row">
                            <?php
                            /**
                             * mysqli_num_rows() truyền vào tham số của hàm mysqli_query()
                             * được sử dụng để đếm số bản ghi trả về của câu SQL
                             */
                            if (mysqli_num_rows($threeNew) > 0) {
                                /**
                                 * mysqli_fetch_assoc() truyền vào biến của mysqli_query()
                                 * nó dùng để lấy ra từng bản ghi trả về của câu SQL
                                 * $row sẽ là 1 bản ghi trong bảng
                                 * vòng lặp while sẽ chạy cho đến khi hết các bản ghi trong bảng trả về từ câu SQL
                                 */
                                while ($row = mysqli_fetch_assoc($threeNew)) {
                                    ?>
                                    <div class="col-md-4 c6">
                                        <img src="assets/images/<?= $row['hinh'] ?>" width="100%"/>
                                        <h6><a style="color: black  ;text-decoration: none;"
                                               href="index.php?controller=chitiet&action=index&id_post=<?= $row['id_post'] ?>"><?= $row['tieude'] ?></a>
                                        </h6>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "<br> Không có bản ghi nào trong CSDL";
                            }
                            ?>
                        </div>

                        <!--                        Vòng lặp cho All tin tức-->
                        <?php
                        /**
                         * mysqli_num_rows() truyền vào tham số của hàm mysqli_query()
                         * được sử dụng để đếm số bản ghi trả về của câu SQL
                         */
                        if (mysqli_num_rows($result) > 0) {
                            /**
                             * total_record: tổng số records(records là 1 tin)
                             * current_page: trang hiện tại
                             * limit: số records hiển thị trên mỗi trang
                             * start: record bắt đầu trong câu lệnh SQL
                             *
                             */
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="row">
                                    <div class="col-5 c7">
                                        <img src="assets/images/<?= $row['hinh'] ?>" width="100%"/>
                                    </div>
                                    <div class="col-7 c7">
                                        <h4><a style="text-decoration: none;color: #000000;"
                                               href="index.php?controller=chitiet&action=index&id_post=<?= $row['id_post'] ?>">
                                                <?= $row['tieude'] ?>
                                            </a></h4>
                                        <p><b>Sống</b> - 2 giờ trước</p>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<br> Không có bản ghi nào trong CSDL";
                        }
                        ?>
                        <nav aria-label="Page navigation example" style="margin-top: 20px;">
                            <ul class="pagination">
                                <?php
                                // PHẦN HIỂN THỊ PHÂN TRANG
                                // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                                if ($current_page > 1 && $total_page > 1) { ?>
                                    <li class="page-item">
                                        <a class="page-link" href="
                                               index.php?controller=index&action=index&page=<?= ($current_page - 1) ?>"
                                           aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                <?php } ?>
                                <?php
                                // Lặp khoảng giữa
                                for ($i = 1; $i <= $total_page; $i++) {
                                    if ($i == $current_page) { ?>
                                        <li class="page-item"><a class="page-link"
                                                                 href="index.php?controller=index&action=index&page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                        <?php
                                    } else { ?>
                                        <li class="page-item"><a class="page-link"
                                                                 href="index.php?controller=index&action=index&page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                        <?php
                                    }
                                } ?>
                                <?php
                                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                if ($current_page < $total_page && $total_page > 1) {
                                    ?>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="index.php?controller=index&action=index&page=<?= ($current_page + 1) ?>"
                                           aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 cc" style="text-align: center;">
                    <img class="c9" src="assets/images/qc1.JPG" width="80%"/>
                    <img class="c9" src="assets/images/qc2.JPG" width="80%"/>
                    <img class="c9" src="assets/images/qc3.JPG" width="80%"/>
                </div>
            </div>
        </div>
    </div>
    <div class="quangcaof">
        <div class="container" style="padding-bottom: 30px; background-color: white;">
            <img src="assets/images/qcb.JPG" width="100%"/>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 c10">
                    <h6>Ban biên tập CafeBiz</h6>
                    <p>Địa chỉ: Tầng 21, tòa nhà Center Building. Số 1 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội.</p>
                    <p>Điện thoại: 024 7309 5555 - Máy lẻ 41294 | Fax: 024-39744082</p>
                    <p>Email: info@cafebiz.vn</p>
                    <p>Ghi rõ nguồn "CafeBiz" khi phát hành lại thông tin</p>
                    <p>Chịu trách nhiệm nội dung: Ông Nguyễn Thế Tân</p>
                </div>
                <div class="col-md-3 c10">
                    <h6>Liên hệ quảng cáo</h6>
                    <p>Hotline: 0942.86.11.33</p>
                    <p>Email: doanhnghiep@admicro.vn</p>
                </div>
                <div class="col-md-4 c10">
                    <img src="assets/images/thuongthoi.jpg" width="25%" style="margin-top: 10px;"/>
                    <h6 style="margin-top: 5px;">© Copyright 2012 - 2019 - Công ty Cổ phần VCCorp</h6>
                    <p>Giấy phép thiết lập trang thông tin điện tử tổng hợp trên internet số 1776/GP-STTTT do Sở Thông
                        tin và Truyền thông TP Hà Nội cấp ngày 23 tháng 06 năm 2014.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>