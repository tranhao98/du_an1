<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-family: 'Nunito Sans', sans-serif; background-color: #f2f2f2;">
    <div class="container mw-100 p-0 m-0">
        <header class=" shadow-sm p-3 mb-3 bg-white rounded">
            <div class="row">
                <div class="col-2 h-100 text-center logo-admin">
                    <img src="../upload/logo.png" alt="">
                </div>
                <div class="col-7 text-left">
                    <i class="fa fa-bars" style="font-size:18pt; padding-top:2%; margin-left:6.3%;"></i>
                </div>
                <div class="col-3 text-right">
                    <div class="pr-2 user-admin">
                        <div class="dropdown">
                            <img src="../upload/comment_2.png" alt="">
                            <a class="dropdown-toggle text-dark" style="text-decoration: none;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hào Long
                            </a>

                            <div class="dropdown-menu mt-3" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Đăng xuất</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="noidung">
            <aside class="shadow-sm pl-1 pr-3 bg-white rounded">
                <div class="accordion mx-n3" id="accordionExample">
                    <div class="card-header bg-white" id="heading0">
                        <h2 class="mb-0">
                            <a class="btn btn-white p-0 " href=""><button style="font-size: 12pt; font-weight:700;" class="btn btn-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                    <i class="fa fa-bar-chart" style="font-size:15px;"></i> Tổng quan
                                </button></a>

                        </h2>
                    </div>
                    <div class="card-header bg-white" id="headingtwo">
                        <h2 class="mb-0">
                            <a class="btn btn-white p-0" href="index.php?ctrl=danhmuc&act=index"><button style="font-size: 12pt; font-weight:700;" class="btn btn-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    <i class="far fa-clone" style="font-size:18px"></i> Quản lý danh mục
                                </button></a>

                        </h2>
                    </div>
                    <div class="card-header bg-white" id="headingtwo">
                        <h2 class="mb-0">
                            <a class="btn btn-white p-0" href="index.php?ctrl=khuvuc&act=index"><button style="font-size: 12pt; font-weight:700;" class="btn btn-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    <i class="fas fa-map-marker-alt" style="font-size:18px"></i> Quản lý khu vực
                                </button></a>
                        </h2>
                    </div>
                    <div class="card bg-white">
                        <div class="card-header bg-white" id="headingOne">
                            <h2 class="mb-0">
                                <button style="font-size: 12pt; font-weight:700;" class="btn btn-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-book" style="font-size:18px"></i> Quản lý bài đăng <i class="fa fa-angle-down" style="font-size:14pt; margin-left:22%;"></i>
                                </button>

                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body font-card-body pl-5">
                                <p><a class="btn btn-white" href="?ctrl=baidang">Danh sách bài đăng</a></p>
                                <p><a class="btn btn-white" href="?ctrl=baidang&act=addnew">Thêm bài đăng</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header bg-white" id="headingThree">
                            <h2 class="mb-0">
                                <button style="font-size: 12pt; font-weight:700;" class="btn btn-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-user-alt" style="font-size:18px"></i> Quản lý người dùng <i class="fa fa-angle-down" style="font-size:14pt; margin-left:13%;"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body font-card-body pl-5">
                                <p><a class="btn btn-white" href="index.php?ctrl=nguoidung&act=index">Danh sách người dùng</a></p>
                                <p><a class="btn btn-white" href="index.php?ctrl=nguoidung&act=addnew">Thêm người dùng</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white" id="heading4">
                            <h2 class="mb-0">
                                <button style="font-size: 12pt; font-weight:700;" class="btn btn-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <i class="far fa-comment-dots" style="font-size:18px"></i> Quản lý thông báo <i class="fa fa-angle-down" style="font-size:14pt; margin-left:17%;"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                            <div class="card-body font-card-body pl-5">
                                <p><a class="btn btn-white" href="?ctrl=thongbao&act=index">Danh sách thông báo</a></p>
                                <p><a class="btn btn-white" href="?ctrl=thongbao&act=addnew">Thêm thông báo</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <main>
                <?php if (isset($view) && file_exists($view)) require_once "$view"; ?>
            </main>
        </div>
        <footer></footer>
    </div>
</body>

</html>