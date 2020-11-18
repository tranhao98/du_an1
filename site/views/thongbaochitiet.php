<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/thongbao.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="../../upload/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Trang chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Đất nền</a>

                            <div class="dropdown-menu">

                                <a class="dropdown-item" href=""></a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Căn hộ</a>

                            <div class="dropdown-menu">

                                <a class="dropdown-item" href=""></a>

                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="">Giới thiệu</a></li>

                        <li class="nav-item"><a class="nav-link" href="">Liên hệ</a></li>

                        <li class="nav-item dn"><a class="nav-link" href="">Đăng nhập</a>

                        </li>

                        <span class="text-white pt-2">
                            <h4 class="text-center">|</h4>
                        </span>
                        <li class="nav-item dk"><a class="nav-link" href="">Đăng ký</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> -->
    <div class="container">
        <div class="row">
            <div class="card-thongbao">
                <div class="thongbao-trai mt-100">
                    <div class="card-title">
                    <h2><?=$rowidtb['tieude']?></h2>
                    <p><?=$rowidtb['ngaydang']?> | Bất động sản</p> 
                        <!-- <h2>Novaland Gallery: Đẳng cấp mới của điểm giao dịch Bất động sản</h2>
                        <p>17/11/2020 | Bất động sản</p> <br> -->
                        <h6>
                            Ngày 19/11 tới đây, tại khu vực trung tâm TP.HCM, Tập đoàn Novaland sẽ ra mắt Novaland Gallery 
                            (Trung tâm Triển lãm Novaland) lớn tại miền Nam với diện tích lên tới gần 5.000 m2. 
                        </h6>
                    </div>
                    <div class="card-content">
                        <h6>Dự án trung tâm triển lãm Novaland </h6>
                        <?php
                            if($rowidtb['hinh'] == NULL)  echo "<img src='../../upload/novaland-gallery.jpg'>";
                            else  echo "<img src='../upload/".$rowidtb['hinh']."' ><br>";
                        ?>
                        <!-- <img src="../../upload/novaland-gallery.jpg" style="text-align:center"> <br> <br> -->
                        <!-- <a class="tbct-noidung"></a> -->
                        <a class="tbct-noidung">
                            <?=$rowidtb['noidung']?>
                            <!-- 
                                Đây được coi là trung tâm triển lãm, giao dịch bất động sản lớn bậc nhất tại khu vực miền Nam tính đến thời điểm hiện tại.
                                Trung tâm Triển lãm Novaland tọa lại tại 179 Hai Bà Trưng, P.6, Q3 (góc giao với đường Điện Biên Phủ). 
                                Đây là điểm tiếp khách lớn nhất của Novaland với nhiều hạng mục tiện ích mới lạ và đột phá.
                                Tiên phong tại TP.HCM, một trung tâm triển lãm đem đến những "trải nghiệm số" vô cùng thú vị, giúp khách hàng hình dung rõ hơn về những dự án tương lai. 
                                Cụ thể phải kể đến như phòng chiếu phim , sa bàn thực tế ảo… Bên cạnh đó, không gian mở và linh hoạt của 
                                Trung tâm cũng rất thuận tiện để chuyển đổi công năng thành nơi tổ chức sự kiện cao cấp. Nhà hàng The Dome tiêu chuẩn 5 sao, cà phê 
                                Saigon Casa nằm trong khuôn viên Triển lãm vừa phục vụ cho các tiệc tri ân khách hàng, cũng vừa tạo thêm điểm gặp gỡ, kết nối lý tưởng cho giới đầu tư thời gian 
                                tới.
                                Các dự án trọng điểm của Novaland sẽ được giới thiệu và trưng bày tại đây như: The Grand Manhattan (Q.1, TP.HCM), Aqua City (Biên Hòa, Đồng Nai), 
                                NovaWorld Ho Tram (Bà Rịa Vũng Tàu), NovaWorld Phan Thiet (Phan Thiết, Bình Thuận), NovaHills Mui Ne Resort & Villas (Mũi Né, Bình Thuận)…
                                Bên cạnh sa bàn thực, khách hàng còn có thể tham quan các dự án bằng hệ thống sa bàn thực tế ảo; qua đó có thể quan sát các dự án từ tổng quan, 
                                góc trên cao với mọi phương hướng, đến sự thay đổi về thời tiết, thời gian trong ngày (sáng, trưa, tối). Các thông tin từ hệ thống sa bàn sẽ giúp 
                                khách hàng có lựa chọn sản phẩm phù hợp với nhu cầu về vị trí, hướng nhà, kết nối tiện ích ưa chuộng… 
                            -->
                        </a>
                    </div>
                    <div class="card-conclude">
                        <p class="tbct-nguoidang"><?php echo getNameNguoiDung($rowidtb['idnguoidang'])['hoten'];?></p><br>
                        <p class="tbct-nguontt">VnExpress</p>
                    </div>
                </div>
                <div class="thongbao-phai mt-200">
                    <div class="card-thongbao">
                        <div class="tintucmoi">
                            <h4>Tin tức mới</h4>
                            <?php foreach ($dstb as $row) { ?>
                                <li><a href='?act=chitietthongbao&idtb=<?=$row['idtb']?>'><?=$row['tieude']?></a></li>
                            <?php } ?>
                            <!-- <li><a href="">Eximbank tổ chức đại hội cổ đông lần 4</a></li>
                            <li><a href="">Bất động sản Tp.HCM trên đà “hồi sinh” trở lại?</a></li>
                            <li><a href="">BĐS công nghiệp Bắc Ninh – Xu hướng mới của giới đầu tư</a></li>
                            <li><a href="">B.thự sang trọng tại sân golf của NovaWorld Phan Thiet</a></li>
                            <li><a href="">Top 6 mẫu biệt thự hiện đại đang được ưa chuộng hiện nay</a></li>
                            <li><a href="">Khám phá căn hộ “không góc chết” tại Imperia Smart City</a></li> -->
                        </div>
                        <div class="tintuccu">
                            <!-- <h4>Tin tức cũ</h4>
                            <li><a href="">Garden Riverside: Tận hưởng chất lượng sống sinh thái bên sông</a></li>
                            <li><a href="">Celesta Rise đưa phong cách nghỉ dưỡng vào không gian sống</a></li>
                            <li><a href="">Long An chi 13.000 tỷ đồng xây dựng 8 công trình giao thông quan trọng</a></li>
                            <li><a href="">Số lượng dự án BĐS nghỉ dưỡng được cấp phép tại miền Trung gấp 9 lần cả miền Bắc và miền Nam cộng lại</a></li>
                            <li><a href="">Lilama 18 xin chuyển mục đích sử dụng đất rừng tự nhiên để xây khu du lịch nghỉ dưỡng</a></li>
                            <li><a href="">The Icon – dinh thự sang trọng với thiết kế thông minh dành cho nhà đầu tư tinh nhạy</a></li>
                            <li><a href="">The Residence Phú Quốc mở bán biệt thự 2 mặt tiền tại Bãi Trường</a></li> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- 
    <script src="../../js/jquery/jquery.min.js"></script>
    <script src="../../js/custom.js"> </script>
    <script src="../../js/owl.js"> </script>
    <script src="../../js/accordions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html> -->