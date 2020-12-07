<section class="section section-bg" id="call-to-action" style="background-image: url(views/images/banner3.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Bất động sản<em> <?php echo getTenDanhMuc($id) ?></em></h2>
                    <p>Bán &nbsp;/&nbsp;BĐS <?php echo getTenDanhMuc($id) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="trainers">
    <div class="container">
        <br>
        <br>

        <div class="contact-form">
            <form action="" id="contact" method="POST">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Lọc theo khoảng giá</label>
                            <select name="gia" class="m-0">
                                <option value="">Tất cả</option>
                                <option value="100000000 AND 200000000">100 triệu - 200 triệu</option>
                                <option value="200000000 AND 500000000">200 triệu - 500 triệu</option>
                                <option value="500000000 AND 1000000000">500 triệu - 1 tỷ</option>
                            </select>
                           
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Lọc theo diện tích</label>

                            <select name="dientich" class="m-0">
                                <option value="">Tất cả</option>
                                <option value="10 and 30">
                                    <=30 m2 </option> <option value="30 AND 50">30 m<sup>2</sup> - 50 m<sup>2</sup>
                                </option>
                                <option value="50 AND 70">50 m<sup>2</sup> - 70 m<sup>2</sup></option>
                                <option value="70 AND 90">70 m<sup>2</sup> - 90 m<sup>2</sup></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Sắp xếp</label>

                            <select name="sapxep" class="m-0">
                                <option value="">Sắp xếp</option>
                                <option value="idsp desc">Tin mới nhất</option>
                                <option value="gia asc">Giá thấp đến cao</option>
                                <option value="gia desc">Giá cao đến thấp</option>
                                <option value="dientich asc">Diện tích bé đến lớn</option>
                                <option value="dientich desc">Diện tích lớn đến bé</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 offset-sm-4 mt-3">

                        <div class="main-button text-center">
                            <input class="fillter" type="submit" name="search" value="Tìm kiếm">
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </form>
        </div>

        <div class="row mt-5">
            <?php if (isset($_POST['search'])) {
                foreach ($dsfillterdm as $row) { ?>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <a href="?act=baidang&id=<?= $row['idsp'] ?>"><img src="../upload/<?= $row['hinh'] ?>" onerror="this.src = '../upload/noimg.jpg';" height="200px"></a>
                            </div>
                            <div class="down-content">
                                <span>
                                    <?= number_format($row['gia'], 0, ",", "."); ?><?php if (strlen(strstr(strtolower($row['tensp']), "cho thuê")) > 0) echo '/tháng';
                                                                                    else echo '/m<sup>2</sup>'; ?> - <?= $row['dientich'] ?> m<sup>2</sup>
                                </span>

                                <a href="?act=baidang&id=<?= $row['idsp'] ?>">
                                    <h4><?= _substr($row['tensp'], 55) ?></h4>
                                </a>

                                <p><?= $row['diadiem'] ?></p>

                                <ul class="social-icons">
                                    <li><a href="?act=baidang&id=<?= $row['idsp'] ?>">+ Xem thêm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <?php foreach ($dsdanhmuc as $row) { ?>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <a href="?act=baidang&id=<?= $row['idsp'] ?>"><img src="../upload/<?= $row['hinh'] ?>" onerror="this.src = '../upload/noimg.jpg';" height="200px"></a>
                            </div>
                            <div class="down-content">
                                <span>
                                    <?= number_format($row['gia'], 0, ",", "."); ?><?php if (strlen(strstr(strtolower($row['tensp']), "cho thuê")) > 0) echo '/tháng';
                                                                                    else echo '/m<sup>2</sup>'; ?> - <?= $row['dientich'] ?> m<sup>2</sup>
                                </span>

                                <a href="?act=baidang&id=<?= $row['idsp'] ?>">
                                    <h4><?= _substr($row['tensp'], 55) ?></h4>
                                </a>

                                <p><?= $row['diadiem'] ?></p>

                                <ul class="social-icons">
                                    <li><a href="?act=baidang&id=<?= $row['idsp'] ?>">+ Xem thêm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>

        </div>

        <br>
        <?php if (!isset($_POST['search'])) { ?>
            <div class="pagination_container"> <?= $links; ?> </div>
        <?php } ?>

    </div>
</section>