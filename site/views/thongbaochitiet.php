<div class="container">
    <div class="row">
        <div class="card-thongbao">
            <div class="thongbao-trai mt-100">
                <div class="card-title justify">
                    <h2><?= $rowidtb['tieude'] ?></h2>
                    <p class="mb-20"><i class="fa fa-calendar"></i> <?= $rowidtb['ngaydang'] ?> | Bất động sản</p>
                    <h6 class="mb-20 fw-7">
                        <?= $rowidtb['tieude2'] ?>
                    </h6>
                </div>
                <div class="card-content justify">
                    <?php
                    if ($rowidtb['hinh'] == NULL)  echo "<img src='../../upload/novaland-gallery.jpg'>";
                    else  echo "<img src='../upload/" . $rowidtb['hinh'] . "' ><br><br>";
                    ?>
                    <p class="tbct-noidung justify">
                        <?= $rowidtb['noidung'] ?>
                    </p>
                    <p class="tbct-noidung justify">
                        <?= $rowidtb['noidung2'] ?>
                    </p>
                    <?php
                    if ($rowidtb['hinh'] == NULL)  echo "";
                    else  echo "<img src='../upload/" . $rowidtb['hinh2'] . "' ><br><br>";
                    ?>
                    <p class="tbct-noidung justify">
                        <?= $rowidtb['noidung3'] ?>
                    </p>
                    <p class="tbct-noidung justify">
                        <?= $rowidtb['noidung4'] ?>
                    </p>
                </div>
                <div class="card-conclude">
                    <p class="tbct-nguoidang"><?php echo getNameNguoiDung($rowidtb['idnguoidang'])['hoten']; ?></p><br>
                    <p class="tbct-nguontt">VnExpress</p>
                </div>
                <!-- SOCIAL NETWORK -->
                <div class="card-share">
                    <div class="socials-share">
                        <a class="bg-facebook" href="" target="_blank"><span class="fa fa-facebook"></span> Share</a>
                        <a class="bg-twitter" href="" target="_blank"><span class="fa fa-twitter"></span> Tweet</a>
                        <a class="bg-google-plus" href="" target="_blank"><span class="fa fa-google-plus"></span> Plus</a>
                        <a class="bg-pinterest" href="" target="_blank"><span class="fa fa-pinterest"></span> Pin</a>
                        <a class="bg-email" href="" target="_blank"><span class="fa fa-envelope"></span> Gmail</a>
                    </div>
                </div>
                <!-- BÌNH LUẬN -->
                <div class="card-comment">

                    <div class="row">
                        <h3 class="text-secondary pl-3 pr-3">Bình luận</h3>
                        <iframe src="comment.php" width=100% height=300px frameborder="0"></iframe>
                        <?php if(isset($_SESSION['sid'])) { ?>
                        <form method="post" class="form_cmt w-100" id="comment_form">
                            <div class="row m-0">
                                <div class="col-10 form-group">
                                    <textarea class="form-control mb-3" name="noidung" id="noidung" rows="3" placeholder="Nhập nội dung bình luận tại đây!"></textarea>
                                </div>
                                <div class="col-2">
                                    <input style="padding: 15px; width: 100%" id="guicmt" class="btn btn-primary" type="submit" value="Bình luận" name="guicmt">
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                        <?php
                                if (isset($_POST['guicmt']) && ($_POST['guicmt'])) {

                                    $noidung = $_POST['noidung'];

                                    $thoigianbinhluan = date("Y/m/d h:i:s");
                                    $idtb = $_GET['idtb'];
                                    $idnguoibl = $_SESSION['sid'];
                                    if ($noidung != "") {
                                        addcmt($idnguoibl, $idtb, $noidung, $thoigianbinhluan);
                                    }
                                }

                                ?>
                    </div>

                </div>
            </div>
            <div class="thongbao-phai mt-100">
                <div class="card-thongbao">
                    <div class="tintucmoi">
                        <li class="list-group-item bg-dark justify">
                            <h6 class="ttmoi text-white justify">TIN TỨC MỚI</h6>
                        </li>
                        <?php foreach ($dstbnew as $row) { ?>
                            <li class="justify t-bold text-blue"><a href='?act=chitietthongbao&idtb=<?= $row['idtb'] ?>'><?= $row['tieude'] ?></a></li>
                        <?php } ?>
                    </div>
                    <div class="tintuccu mt-20">
                        <li class="list-group-item bg-dark">
                            <h6 class="ttmoi text-white">TIN TỨC CŨ</h6>
                        </li>
                        <?php foreach ($dstbold as $row) { ?>
                            <li class="justify t-bold text-blue"><a href='?act=chitietthongbao&idtb=<?= $row['idtb'] ?>'><?= $row['tieude'] ?></a></li>
                        <?php } ?>
                    </div>
                    <div class="tintuckhac mt-20">
                        <li class="list-group-item gifchitiet"><img src="../upload/tintuc1.gif" alt=""></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>