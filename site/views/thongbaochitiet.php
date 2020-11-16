<!DOCTYPE html>
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
    </header>


    <section  class="section mt--100" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="boxchitiet-img mt-100">
                    <div class="">
                        <img src="../../upload/noavatar.png" height="600px" width="500px">
                    </div>
                </div>
                <div class="boxchitiet-text mt-200">
                    <div class="">
                        <h5>THÔNG TIN THÔNG BÁO</h5>
                        <p>Tiêu đề:</p>
                        <p>Tên người đăng:</p>
                        <p>Ngày đăng:</p>
                    </div>
                    <div class="">
                        <h5>NỘI DUNG THÔNG BÁO</h5>
                        <p>...............................................................................................</p>
                        <p>...............................................................................................</p>
                        <p>...............................................................................................</p>
                        <p>...............................................................................................</p>
                        <p>...............................................................................................</p>
                    </div>
                </div>
            </div>

            <div class="row mt-100">
                <div class="col-12 mx-auto " style="min-height: 200px;">
                    <div class="col-12 mt-2">
                        <label for="exampleFormControlTextarea1">BÌNH LUẬN</label><br>
                        <a><img src="../../upload/2.png" class="rounded-circle" width="50"></a>
                        <a class="mt-2">căn hộ này đẹp quá</a>
                        <br><br>
                        <a><img src="../../upload/2.png" class="rounded-circle" width="50"></a>
                        <a class="mt-2">giá căn hộ này như thế nào ạ</a>
                        <br><br>
                        <a><img src="../../upload/2.png" class="rounded-circle" width="50"></a>
                        <a class="mt-2">vị trí thuận tiện không</a>
                        <br><br>
                        <form action="/?act=binhluan" method="post" class="">
                            <div class="form-group w-100">
                                <label for="exampleFormControlTextarea1">VIẾT BÌNH LUẬN</label><br>
                                <div class="nd-bluan"> 
                                    <img src="../../upload/2.png" class="rounded-circle mr-5" width="50">
                                    <textarea class="form-control noidungbinhluan" id="exampleFormControlTextarea1" rows="2" name="noidung" placeholder="THÊM BÌNH LUẬN"></textarea>
                                </div>
                                <input class="btn btn-primary float-right mt-2 mb-2" type="submit" value="Bình luận">
                            </div>
                        </form>
                        <a href="" class="text-center text-info mb-2 mt-2" style="text-align: center;">Bạn cần đăng nhập để có thể bình luận!</a>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../js/jquery/jquery.min.js"></script>
    <script src="../../js/custom.js"> </script>
    <script src="../../js/owl.js"> </script>
    <script src="../../js/accordions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>