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
                    <?php foreach ($dstb as $row) { ?>
                        <li><a href='?act=chitietthongbao&idtb=<?=$row['idtb']?>'><?=$row['tieude']?></a></li>
                    <?php } ?>
                    <!-- <li><a href='#tabs-1'>Loạt chung cư gần Làng Đại học Quốc gia có giá từ 1,6 tỷ/căn.</a></li>
                    <li><a href='#tabs-2'>“Còng lưng” vì 1 phút sĩ diện muốn xây nhà to ra ở riêng.</a></li>
                    <li><a href='#tabs-3'>Chỉ có 300 triệu đồng trong tay, tôi vẫn mua được nhà nhờ biết “liệu cơm gắp mắm”.</a></li> -->
                    <div class="main-rounded-button"><a href="">Xem Thêm Tin Tức</a></div> 
                </ul>
            </div>
            <div class="col-lg-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="views/images/banner.png" alt="">
                        <h4>Loạt chung cư gần Làng Đại học Quốc gia có giá từ 1,6 tỷ/căn.</h4>

                        <p><i class="fa fa-user"></i> Hào Long &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 bình luận</p>

                        <p>Khu vực Làng Đại học Thủ Đức, đặc biệt là tuyến đường Thống Nhất nối từ quốc lộ 1K vào địa phận Dĩ An, Bình Dương hiện có trên dưới chục dự án đã và đang triển khai. Hiện đang có gần 10.000 căn hộ được rao bán ở khu vực này với mật độ chung cư dày đặc.</p>
                        <div class="main-button">
                            <a href=" ">Đọc tiếp</a>
                        </div>
                    </article>
                    <article id='tabs-2'>
                        <img src="views/images/banner2.png" alt="">
                        <h4>“Còng lưng” vì 1 phút sĩ diện muốn xây nhà to ra ở riêng.</h4>
                        <p><i class="fa fa-user"></i> Hào Long &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 bình luận</p>
                        <p>Thay vì mất 6-12 tháng để tìm và mua nhà như nhiều người, chúng tôi chỉ việc xây nhà trên mảnh đất được bố mẹ cho sẵn nhưng mọi chuyện cũng không mấy suôn sẻ như tôi nghĩ.</p>
                        <div class="main-button">
                            <a href="">Đọc tiếp</a>
                        </div>
                    </article>
                    <!-- <article id='tabs-3'>
                        <img src="views/images/banner3.png" alt="">
                        <h4>Chỉ có 300 triệu đồng trong tay, tôi vẫn mua được nhà nhờ biết “liệu cơm gắp mắm”.</h4>
                        <p><i class="fa fa-user"></i> Hào Long &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 bình luận</p>
                        <p>“Điên”, “liều”, “thích sang chảnh”… là những từ mà đôi vợ chồng trẻ nhận được từ người thân, bạn bè khi quyết định mua nhà trong tình trạng chỉ mới tiết kiệm được ngót nghét 300 triệu đồng.</p>
                        <div class="main-button">
                            <a href=" ">Đọc tiếp</a>
                        </div>
                    </article> -->
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
                    <h2>Bất động sản được <em>đề xuất</em></h2>
                    <img src="views/images/line-dec.png" alt="">
                </div>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
                                    <a href=""><img src="../upload/<?= $bd['hinh'] ?>" onerror="this.src = '../upload/noimg.jpg';" height="200px"></a>
                                </div>
                                <div class="down-content">
                                    <span>
                                        <?= number_format($bd['gia'], 0, ",", "."); ?>/m<sup>2</sup> - <?= $bd['dientich'] ?> m<sup>2</sup>
                                    </span>

                                    <a href="">
                                        <h4><?= $bd['tensp'] ?></h4>
                                    </a>

                                    <p><?= $bd['diadiem'] ?></p>

                                    <ul class="social-icons">
                                        <li><a href="  ">+ Xem thêm</a></li>
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
            <a  class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
                <div class="single_location special">
                    <div class="thumb">
                        <img src="views/images/banner.png" alt="">
                    </div>
                    <div class="content">
                        <p>TP. Hồ Chí Minh <a href="index.php?ctrl=home&act=cat-khuvuc"> 07 bài đăng</a></p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="single_location">
                            <div class="thumb">
                                <img src="views/images/banner.png" alt="">
                            </div>
                            <div class="content">
                                <p>TP. Hồ Chí Minh <a href="#"> 07 bài đăng</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single_location">
                            <div class="thumb">
                                <img src="views/images/banner.png" alt="">
                            </div>
                            <div class="content">
                                <p>TP. Hồ Chí Minh <a href="index.php?ctrl=home&act=cat-khuvuc"> 07 bài đăng</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single_location">
                            <div class="thumb">
                                <img src="views/images/banner.png" alt="">
                            </div>
                            <div class="content">
                                <p>TP. Hồ Chí Minh <a href="index.php?ctrl=home&act=cat-khuvuc"> 07 bài đăng</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single_location">
                            <div class="thumb">
                                <img src="views/images/banner.png" alt="">
                            </div>
                            <div class="content">
                                <p>TP. Hồ Chí Minh <a href="index.php?ctrl=home&act=cat-khuvuc"> 07 bài đăng</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>