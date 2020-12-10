<section class="section" id="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2><em>TIN TỨC</em> MỚI CẬP NHẬT</h2>
                    <img src="views/images/line-dec.png" alt="">
                </div>
            </div>
        </div>
        <div class="row" id="tabs">
            <div class="col-lg-4">
                <ul>
                    <?php
                    $dem = 1;
                    foreach ($dstbnew as $row) { ?>
                        <li><a href='#tabs-<?= $dem++ ?>'><?= $row['tieude'] ?></a></li>
                    <?php } ?>
                    <div class="main-rounded-button"><a href="?act=xemthemtintuc">Xem Thêm Tin Tức</a></div>
                </ul>
            </div>
            <div class="col-lg-8">
                <section class='tabs-content'>
                    <?php
                    $dem = 1;
                    foreach ($dstbnew as $row) {
                    ?>
                        <article id='tabs-<?= $dem++ ?>'>
                            <?php
                            if ($row['hinh'] == NULL)  echo "<img src='../../upload/1.png'>";
                            else  echo "<img style='height: 400px; object-fit:cover; width:100%;' src='../upload/" . $row['hinh'] . "' ><br><br>";
                            ?>
                            <h4><?= $row['tieude'] ?></h4>

                            <p><i class="fa fa-user"></i> <?php echo getNameNguoiDung($row['idnguoidang'])['hoten']; ?> &nbsp;|&nbsp; <i class="fa fa-calendar"></i> <?= $row['ngaydang'] ?> &nbsp;|&nbsp; <i class="fa fa-comments"></i> <?= demsoBinhLuanTheoTB($row['idtb']) ?> bình luận</p>

                            <p><?= _substr($row['noidung'], 250) ?></p>
                            <div class="main-button">
                                <a href="?act=chitietthongbao&idtb=<?= $row['idtb'] ?>">Đọc tiếp</a>
                            </div>
                        </article>
                    <?php } ?>
                </section>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background-color: #f2f2f2;" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Bất động sản<em> mới nhất</em></h2>
                    <img src="views/images/line-dec.png" alt="">
                </div>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators button-black-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <?php
                    $r = 1;
                    foreach ($dsbdnoibat as $bd) {
                        
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
            <a class="carousel-control-prev button-black-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next button-black-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
</section>

<section class="section" id="location">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Bất động sản theo <em>địa điểm</em></h2>
                    <img src="views/images/line-dec.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php foreach ($dskvspecial as $kv) { ?>
                    <div class="single_location special">
                        <div class="thumb">
                            <img src="views/images/banner.png" alt="">
                        </div>
                        <div class="content">
                            <p><?= $kv['tenkhuvuc'] ?><a href="index.php?ctrl=home&act=cat-khuvuc&id=<?= $kv['idkhuvuc'] ?>"><?= demsoBaiDangTheoKV($kv['idkhuvuc']) ?> bài đăng</a></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-6">
                <div class="row">
                    <?php foreach ($dskv as $kv) { ?>
                        <div class="col-6">
                            <div class="single_location">
                                <div class="thumb">
                                    <img src="views/images/banner.png" alt="">
                                </div>
                                <div class="content">
                                    <p><?= $kv['tenkhuvuc'] ?> <a href="index.php?ctrl=home&act=cat-khuvuc&id=<?= $kv['idkhuvuc'] ?>"><?= demsoBaiDangTheoKV($kv['idkhuvuc']) ?> bài đăng</a></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</section>