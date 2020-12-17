<br><br><br><br><br>
<section class="section" id="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2 class="text-center"><?= $rowbaidang['tensp'] ?></h2>
                    <img src="views/images/line-dec.png" alt="">
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section" id="our-classes">
    <div class="big-container">
        <div class="row">
            <div class="card col-md-9 rounded-0 bg-transparent border-0" style="margin-top: -100px;">
                <div class="card-body p-0 mt-4 text-dark">
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
                                <img src="../upload/<?= $rowbaidang['hinh'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh2'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh3'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh4'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="..." >
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh5'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh6'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
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
                </div>
            </div>
            <div class="card col-md-3 rounded-0 border-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-white font-weight-bold">THÔNG TIN</li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Danh mục:</span> <?= getTenDanhMuc($rowbaidang['iddm']) ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Khu vực:</span> <?= getTenKhuVuc($rowbaidang['idkhuvuc']); ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Nội thất:</span> <?= $rowbaidang['noithat'] ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Phòng ngủ:</span> <?= $rowbaidang['phongngu'] ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Diện tích:</span class="text-danger"> <?= $rowbaidang['dientich'] ?> m<sup>2</sup></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Giá:</span> <?= number_format($rowbaidang['gia'], 0, ",", "."); ?><sup>VND</sup><?php if (strlen(strstr(strtolower($rowbaidang['tensp']), "cho thuê")) > 0) echo '/ Tháng';
                                                                                                                        else echo '/M<sup>2</sup>'; ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Người đăng:</span class="text-danger"> <?= getNameNguoiDung($rowbaidang['idnguoiban'])['hoten']; ?></li>

                </ul>
                <div class="divider">
                    <br>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-white font-weight-bold">LIÊN HỆ NGƯỜI ĐĂNG</li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Số điện thoại:</span> +84<?= getNameNguoiDung($rowbaidang['idnguoiban'])['sodienthoai'] ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Email:</span> <?= getNameNguoiDung($rowbaidang['idnguoiban'])['email'] ?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="card col-md-6 rounded-0 border-0 thongtinmota">
                <h2>THÔNG TIN MÔ TẢ</h2>
                <h5>Vị trí:</h5>
                <p class="card-text"><?= $rowbaidang['mota'] ?></p>
                <h5>Hạ tầng:</h5>
                <p>Với tiện ích nội khu đạt chuẩn quốc tế cùng nhiều khu chức năng đa dạng, cao cấp, The Sun Avenue sẽ là điểm nhấn cho phân khúc căn hộ cao cấp tại <?= getTenKhuVuc($rowbaidang['idkhuvuc']); ?> trong thời gian sắp tới.</p>
                <h5>Thông tin:</h5>
                <p>Phòng ngủ:</span> <?= $rowbaidang['phongngu'] ?></p>
                <p>Diện tích:</span class="text-danger"> <?= $rowbaidang['dientich'] ?> m<sup>2</sup></p>
                <p>Nội thất:</span class="text-danger"> <?= $rowbaidang['noithat'] ?>, rèm, máy lạnh, máy giặc</p>
                <p>Giá thuê:</span> <?= number_format($rowbaidang['gia'], 0, ",", "."); ?><sup>VND</sup><?php if (strlen(strstr(strtolower($rowbaidang['tensp']), "cho thuê")) > 0) echo '/ Tháng';
                                                                                                                        else echo '/m <sup>2</sup>'; ?></p>
            </div>
            <div class="card col-md-6 rounded-0 border-0">
                <h2>THÔNG TIN BẢN ĐỒ</h2>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4549694901184!2d106.62692827837184!3d10.852958680974394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1606040054486!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
            </div>
        </div>


    </div>
    <div class="big-container mt-4">
        <div class="auth">
            <span class="auth-child">Tác giả: <?= getNameNguoiDung($rowbaidang['idnguoiban'])['hoten']; ?> | Thời gian đăng: 14h02 11/11/2020</span>
        </div>
    </div>
</section>
<br>