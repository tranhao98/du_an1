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
                        <p class="mb-20"><i class="fa fa-calendar"></i>  <?=$rowidtb['ngaydang']?> | Bất động sản</p> 
                        <h6 class="mb-20">
                            Ngày 19/11 tới đây, tại khu vực trung tâm TP.HCM, Tập đoàn Novaland sẽ ra mắt Novaland Gallery 
                            (Trung tâm Triển lãm Novaland) lớn tại miền Nam với diện tích lên tới gần 5.000 m2. 
                        </h6>
                    </div>
                    <div class="card-content">
                        <?php
                            if($rowidtb['hinh'] == NULL)  echo "<img src='../../upload/novaland-gallery.jpg'>";
                            else  echo "<img src='../upload/".$rowidtb['hinh']."' ><br><br>";
                        ?>
                        <a class="tbct-noidung">
                            <?=$rowidtb['noidung']?>
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