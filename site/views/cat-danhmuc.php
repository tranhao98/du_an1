<section class="section section-bg" id="call-to-action" style="background-image: url(views/images/banner3.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Bất động sản<em> <?php echo getTenDanhMuc($id)?></em></h2>
                    <p>Bán &nbsp;/&nbsp;BĐS <?php echo getTenDanhMuc($id)?></p>
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
            <form action="#" id="contact">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Lọc theo khoảng giá</label>

                            <select>
                                <option value="">All</option>
                                <option value="For Rent">500-800 triệu</option>
                                <option value="For Sale">800 triệu - 1 tỷ</option>
                                <option value="For Sale">1 tỷ - 2 tỷ</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Lọc theo diện tích</label>

                            <select>
                                <option value="">--All --</option>
                                <option value="">
                                    <=30 m2</option> <option value="">30 m2 - 50 m2
                                </option>
                                <option value="">50 m2 - 80 m2</option>
                                <option value="">80 m2 - 100 m2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Loại nhà đất</label>

                            <select>
                                <option value="">-- All --</option>
                                <option value="">Căn hộ chung cư</option>
                                <option value="">Đất nền dự án</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 offset-sm-4">
                        <div class="main-button text-center">
                            <a href="#">Tìm kiếm</a>
                        </div>
                    </div>
                    <br>
                    <br>
            </form>
        </div>

        <div class="row mt-5">
            <?php foreach ($dsdanhmuc as $row) { ?>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <a href="?act=baidang&id=<?= $row['idsp'] ?>"><img src="../upload/<?= $row['hinh'] ?>" onerror="this.src = '../upload/noimg.jpg';" height="200px"></a>
                        </div>
                        <div class="down-content">
                            <span>
                                <?= number_format($row['gia'], 0, ",", "."); ?><?php if (strlen(strstr(strtolower($row['tensp']), "cho thuê")) > 0 ) echo '/tháng'; else echo '/m<sup>2</sup>';?> - <?= $row['dientich'] ?> m<sup>2</sup>
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
            <?php } ?>

        </div>

        <br>

        <div class="pagination_container"> <?= $links; ?> </div>

    </div>
</section>