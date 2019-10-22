<!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="header" style="background-color: #343A40;  position: fixed;z-index: 10000;width: 100%;">
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
            <img src="assets/images/ctqc1.JPG" width="85%"/>
        </div>
    </div>
    <div class="content">
        <div class="container" style="">
            <div class="row">
                <div class="col-md-9 c1" style=" ">
                    <h4 style="margin:30px 15px 15px 15px;"><b>
                            <?=$post['tieude']?>
                        </b></h4>
                    <p style="margin: 0 15px 15px 15px;"> <?=$post['created_at']?> | <span>SỐNG</span></p>
                    <div style="border-bottom: 1px dotted #b4b4b4; margin: 15px;"></div>
                    <div class="c11" style="width: 90%; padding-left: 50px;">
                        <p style="font-size: 13px; margin-bottom: 2px;">15-10-2019 | <span
                                style="font-weight: bold;color: #1560b4;">Bước qua Rằm tháng 10, 3 con giáp bước chân trái
                        gặp thần tài, bước chân...</span></p>
                        <p style="font-size: 13px;margin-bottom: 2px;">14-10-2019 | <span
                                style="font-weight: bold;color: #1560b4;">Tuần 3 tháng 10, 3 con giáp có thể gặp vận đen,
                            cần thận trọng lời nói, đề... </span>
                        </p>
                        <p style="font-size: 13px;margin-bottom: 2px;">13-10-2019 | <span
                                style="font-weight: bold;color: #1560b4;">Top 3 con giáp may mắn nhất tuần (14/10 - 20/10)
                            : Đầu tuần công việc suôn... </span></p>
                        <p style="font-size: 13px;margin-bottom: 2px;">13-10-2019 | <span
                                style="font-weight: bold;color: #1560b4;"> Sau Rằm tháng 9 âm, 5 con giáp đổi vận, sự
                            nghiệp lên phơi phới, tiền bạc... </span></p>
                        <p style="font-size: 13px;margin-bottom: 2px;">10-10-2019 | <span
                                style="font-weight: bold;color: #1560b4;"> Cuối tháng 9 âm có 3 con giáp được mùa kiếm
                            tiền, 2 con giáp cần cẩn trọng </span></p>
                        <img style="margin-top: 30px;margin-bottom: 30px;" src="assets/images/<?=$post['hinh']?>" width="100%"/>
                        <p>
                            <?=$post['noidung']?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 cc" style="text-align: center;">
                    <img class="c9" src="assets/images/qc3.JPG" width="80%"/>
                    <img class="c9" src="assets/images/qc1.JPG" width="80%"/>
                    <img class="c9" src="assets/images/qc2.JPG" width="80%"/>
                </div>
            </div>
        </div>
    </div>
    <div class="quangcaof">
        <div class="container" style="padding-bottom: 30px; background-color: white;">
            <img src="assets/images/ctqc2.JPG" width="100%"/>
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