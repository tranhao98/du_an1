<!-- <br><br><br><br><br> -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active mt-bannerbaidang">
            <img src="../upload/<?= $rowbaidang['hinh'] ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item mt-bannerbaidang">
            <img src="../upload/<?= $rowbaidang['hinh2'] ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item mt-bannerbaidang">
            <img src="../upload/<?= $rowbaidang['hinh3'] ?>" style="height: 600px; object-fit:cover;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item mt-bannerbaidang">
            <img src="../upload/<?= $rowbaidang['hinh4'] ?>" class="d-block w-100" alt="..." style="height: 600px; object-fit:cover;">
        </div>
        <div class="carousel-item mt-bannerbaidang">
            <img src="../upload/<?= $rowbaidang['hinh5'] ?>" class="d-block w-100" alt="..." style="height: 600px; object-fit:cover;">
        </div>
        <div class="carousel-item mt-bannerbaidang">
            <img src="../upload/<?= $rowbaidang['hinh6'] ?>" class="d-block w-100" alt="..." style="height: 600px; object-fit:cover;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="section" id="our-classes">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2 class="text-left"><?= $rowbaidang['tensp'] ?></h2>
                    <img src="views/images/line-dec.png" alt="">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="card col-md-8 rounded-0 bg-transparent border-0">
                <div class="card-body p-0 mt-4 text-dark">
                    <h2>Thông tin mô tả</h2>
                    <p class="card-text"><?=$rowbaidang['mota']?></p>
                    
                </div>
            </div>
            <div class="card col-md-4 rounded-0 border-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-white">Thông tin</li>
                    <li class="list-group-item">Tác giả: <?= getNameNguoiDung($rowbaidang['idnguoiban'])['hoten'];?></li>
                    <li class="list-group-item">Giá: <?= number_format($rowbaidang['gia'], 0, ",", "."); ?><sup>đ</sup><?php if (strlen(strstr(strtolower($rowbaidang['tensp']), "cho thuê")) > 0) echo '/tháng';
                                                                                        else echo '/m<sup>2</sup>'; ?></li>
                    <li class="list-group-item">Khu vực: <?= getTenKhuVuc($rowbaidang['idkhuvuc']); ?></li>
                    <li class="list-group-item">Danh mục: <?= getTenDanhMuc($rowbaidang['iddm'])?></li>
                    <li class="list-group-item">Nội thất: <?=$rowbaidang['noithat']?></li>
                    <li class="list-group-item">Phòng ngủ: <?=$rowbaidang['phongngu']?></li>
                    <li class="list-group-item">Diện tích: <?=$rowbaidang['dientich']?> m<sup>2</sup></li>
                </ul>
                <div class="divider">
                    <br>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-white">Liên hệ người đăng</li>
                    <li class="list-group-item">Số điện thoại: <?= getNameNguoiDung($rowbaidang['idnguoiban'])['sodienthoai']?></li>
                    <li class="list-group-item">Email: <?= getNameNguoiDung($rowbaidang['idnguoiban'])['email']?></li>
                </ul>
            </div>
        </div>


    </div>
    <div class="container mt-4">
        <div class="grid-image">
            <img loading="lazy" src="../upload/<?=$rowbaidang['hinh']?>" alt="" class="image-item" />
            <img loading="lazy" src="../upload/<?=$rowbaidang['hinh2']?>" alt="" class="image-item" />
            <img loading="lazy" src="../upload/<?=$rowbaidang['hinh3']?>" alt="" class="image-item" />
            <img loading="lazy" src="../upload/<?=$rowbaidang['hinh4']?>" alt="" class="image-item" />
            <img loading="lazy" src="../upload/<?=$rowbaidang['hinh5']?>" alt="" class="image-item" />
            <img loading="lazy" src="../upload/<?=$rowbaidang['hinh6']?>" alt="" class="image-item" />
        </div>
    </div>
    <div class="container mt-4">
        <div class="auth">
            <span class="auth-child">Tác giả: <?= getNameNguoiDung($rowbaidang['idnguoiban'])['hoten'];?> | Thời gian đăng: 14h02 11/11/2020</span>
        </div>
    </div>
</section>
<br>
<section class="section mt-3" style="background-color: #f2f2f2;" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Bất động sản được <em>đề xuất</em></h2>
                    <img src="views/images/line-dec.png" alt="">
                </div>
            </div>
        </div>
        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators button-black-indicators">
                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <?php
                    $r = 1;
                    foreach ($dsbd as $bd) {
                        if ($r % 9 == 0) {
                            echo '</div><div class="carousel-item">';
                        }
                    ?>
                        <div class="box-baidang">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <a href="?act=baidang&id=<?= $bd['idsp'] ?>"><img src="../upload/<?= $bd['hinh'] ?>" onerror="this.src = '../upload/noimg.jpg';" height="200px"></a>
                                </div>
                                <div class="down-content">
                                    <span>
                                        <?= number_format($bd['gia'], 0, ",", "."); ?><?php if (strlen(strstr(strtolower($bd['tensp']), "cho thuê")) > 0) echo '/tháng';
                                                                                        else echo '/m<sup>2</sup>'; ?> - <?= $bd['dientich'] ?> m<sup>2</sup>
                                    </span>
                                    <a href="?act=baidang&id=<?= $bd['idsp'] ?>">
                                        <h4><?= _substr($bd['tensp'], 55) ?></h4>
                                    </a>

                                    <p><?= $bd['diadiem'] ?></p>

                                    <ul class="social-icons">
                                        <li><a href="?act=baidang&id=<?= $bd['idsp'] ?>">+ Xem thêm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php $r++;
                    } ?>
                </div>
            </div>
            <br>
            <br>
            <a class="carousel-control-prev button-black-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next button-black-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</section>