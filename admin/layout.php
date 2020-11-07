<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-family: 'Poppins', sans-serif;box-sizing:border-box;" class="bg-light">
    <div class="container mw-100 p-0">
        <header class="mb-3">
            <div class="row">
                <div class="col-3 p-3 text-center mt-n3">
                    <img src="../upload/logo.png" alt="">
                </div>
                <div class="col-6 text-left">
                    <i class="fa fa-bars" style="font-size:30px"></i>
                </div>
                <div class="col-3 text-right">
                    <div class="pr-4">
                        <img class="w-25" src="../upload/comment_2.png" alt="">
                        <span style="font-size: 20px; font-weight:bold;">Hào Long <i class="fa fa-angle-down" style="font-size:22px"></i></span>
                    </div>
                </div>

            </div>
        </header>
        <div class="row noidung">
            <aside class="col-3 bg-white">
                <div class="accordion mx-n3" id="accordionExample">
                    <div class="card-header bg-white" id="heading0">
                        <h2 class="mb-0">
                            <button class="btn btn-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                <a class="btn btn-white" href=""><i class="fa fa-bar-chart" style="font-size:20px"></i> Tổng quan</a>
                            </button>

                        </h2>
                    </div>
                    <div class="card bg-white">
                        <div class="card-header bg-white" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-cogs" style="font-size:20px"></i> Quản lý bài đăng <span style="margin-left: 120px;"><i class="fa fa-angle-down" style="font-size:22px"></i></span>
                                </button>

                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body pl-5">
                                <p><a class="btn btn-white" href="">Danh sách bài đăng</a></p>
                                <p><a class="btn btn-white" href="">Thêm bài đăng</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-cogs" style="font-size:20px"></i> Quản lý danh mục <span style="margin-left: 112px;"><i class="fa fa-angle-down" style="font-size:22px"></i></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body pl-5">
                                <p><a class="btn btn-white" href="">Danh sách danh mục</a></p>
                                <p><a class="btn btn-white" href="">Thêm danh mục</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white" id="heading5">
                            <h2 class="mb-0">
                                <button class="btn btn-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <i class="fa fa-cogs" style="font-size:20px"></i> Quản lý khu vực <span style="margin-left: 130px;"><i class="fa fa-angle-down" style="font-size:22px"></i></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                            <div class="card-body pl-5">
                                <p><a class="btn btn-white" href="">Danh sách khu vực</a></p>
                                <p><a class="btn btn-white" href="">Thêm khu vực</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-cogs" style="font-size:20px"></i> Quản lý người dùng <span style="margin-left: 100px;"><i class="fa fa-angle-down" style="font-size:22px"></i></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body pl-5">
                                <p><a class="btn btn-white" href="">Danh sách người dùng</a></p>
                                <p><a class="btn btn-white" href="">Thêm người dùng</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <i class="fa fa-cogs" style="font-size:20px"></i> Quản lý thông báo <span style="margin-left: 110px;"><i class="fa fa-angle-down" style="font-size:22px"></i></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                            <div class="card-body pl-5">
                                <p><a class="btn btn-white" href="">Danh sách thông báo</a></p>
                                <p><a class="btn btn-white" href="">Thêm thông báo</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <main class="col-9">
                <div class="row bg-white mb-3 ml-2 p-2">
                    <div class="col-9 text-left align-self-center">
                        <h2>Tên chức năng</h2>
                    </div>
                    <div class="col-3 ">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white">
                                <li class="breadcrumb-item active"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <?php if (isset($view) && file_exists($view)) require_once "$view"; ?>
            </main>
        </div>
        <footer></footer>
    </div>
</body>

</html>