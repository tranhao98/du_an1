<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardwork Team</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/css/thongbao.css">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/owl.css">
    <link rel="shortcut icon" type="image/png" href="https://png.pngtree.com/png-clipart/20200701/original/pngtree-family-stay-at-home-illustration-to-prevent-covid-19-plague-vector-png-image_5344919.jpg" />
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
                    <img src="../upload/logo.png" alt="">
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
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php?ctrl=home&act=cat-danhmuc" role="button" aria-haspopup="true" aria-expanded="false">Đất nền</a>

                            <div class="dropdown-menu">
                                <?php foreach ($dsdm1 as $dm1) { ?>
                                <a class="dropdown-item" href="index.php?ctrl=home&act=cat-danhmuc&id=<?=$dm1['iddm']?>"><?=$dm1['tendm']?></a>
                                <?php } ?>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php?ctrl=home&act=cat-danhmuc" role="button" aria-haspopup="true" aria-expanded="false">Căn hộ</a>

                            <div class="dropdown-menu">

                            <?php foreach ($dsdm2 as $dm2) { ?>
                                <a class="dropdown-item" href="index.php?ctrl=home&act=cat-danhmuc&id=<?=$dm2['iddm']?>"><?=$dm2['tendm']?></a>
                                <?php } ?>

                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="">Giới thiệu</a></li>

                        <li class="nav-item"><a class="nav-link" href="">Liên hệ</a></li>

                        <li class="nav-item dn"><a data-toggle="modal" data-target="#staticBackdrop2" class="nav-link" href="">Đăng nhập</a>

                        </li>

                        <span class="text-white pt-2">
                            <h4 class="text-center">|</h4>
                        </span>
                        <li class="nav-item dk"><a class="nav-link" href="../admin/dangnhap.php">Đăng ký</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>HARDWORK TEAM</h4>
                    <h2>REAL ESTATE</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>HARDWORK TEAM</h4>
                    <h2>REAL ESTATE</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>HARDWORK TEAM</h4>
                    <h2>REAL ESTATE</h2>
                </div>
            </div>
        </div>
    </div>
    <main>
        <?php if (isset($view) && file_exists($view)) require_once "$view"; ?>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <img src="../upload/logo-footer.png" alt="">
                    <p><strong>Địa chỉ:</strong> Toà nhà Innovation, lô 24, Công viên phần mềm Quang Trung.</p>
                    <p><strong>Điện thoại:</strong> <a href="#">0798445519</a></p>
                    <p><strong>Email:</strong> <a href="#">hardworkt@gmail.com</a></p>
                    <p><strong>Website</strong> <a href="#">www.hardworkt.com</a></p>
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Hướng dẫn</h4>
                    <ul class="menu-list">
                        <li><a href="#">Báo giá & hỗ trợ</a></li>
                        <li><a href="#">Câu hỏi thường gặp</a></li>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Thông báo</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Quy định</h4>
                    <ul class="menu-list">
                        <li><a href="#">Quy định đăng tin</a></li>
                        <li><a href="#">Quy chế hoạt động</a></li>
                        <li><a href="#">Điều khoản thỏa thuận</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item last-item">
                    <h4>Kết nối với chúng tôi</h4>
                    <div class="contact-form">
                        <form id="contact footer-contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Họ tên đầy đủ" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="sdt" type="text" class="form-control" id="sdt" pattern="[^ @]*@[^ @]*" placeholder="Số điện thoại" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Nhập dự án quan tâm, chúng tôi sẽ gọi lại cho bạn" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Gửi</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright © 2020 HardWorkTeam
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "views/dangnhap.php"; ?>
</body>

</html>
<script src="../js/jquery/jquery.min.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/owl.js"> </script>
<script src="../js/accordions.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>