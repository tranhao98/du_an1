
    <div class="container">
        <div class="row">
            <div class="card-thongbao">
                <div class="thongbao-trai mt-100">
                    <div class="card-title">
                        <h2><?=$rowidtb['tieude']?></h2>
                        <p class="mb-20"><i class="fa fa-calendar"></i>  <?=$rowidtb['ngaydang']?> | Bất động sản</p> 
                        <h6 class="mb-20">
                            <?=$rowidtb['tieude2']?>
                        </h6>
                    </div>
                    <div class="card-content">
                        <?php
                            if($rowidtb['hinh'] == NULL)  echo "<img src='../../upload/novaland-gallery.jpg'>";
                            else  echo "<img src='../upload/".$rowidtb['hinh']."' ><br><br>";
                        ?>
                        <p class="tbct-noidung">
                            <?=$rowidtb['noidung']?>
                        </p>
                        <p class="tbct-noidung">
                            <?=$rowidtb['noidung2']?>
                        </p>
                        <?php
                            if($rowidtb['hinh'] == NULL)  echo "<img src='../../upload/novaland-gallery.jpg'>";
                            else  echo "<img src='../upload/".$rowidtb['hinh2']."' ><br><br>";
                        ?>
                        <p class="tbct-noidung">
                            <?=$rowidtb['noidung3']?>
                        </p>
                        <p class="tbct-noidung">
                            <?=$rowidtb['noidung4']?>
                        </p>
                    </div>
                    <div class="card-conclude">
                        <p class="tbct-nguoidang"><?php echo getNameNguoiDung($rowidtb['idnguoidang'])['hoten'];?></p><br>
                        <p class="tbct-nguontt">VnExpress</p>
                    </div>
                    <div class="card-share">
                        <div class="socials-share">
                            <a class="bg-facebook" href="" target="_blank"><span class="fa fa-facebook"></span> Share</a>
                            <a class="bg-twitter" href="" target="_blank"><span class="fa fa-twitter"></span> Tweet</a>
                            <a class="bg-google-plus" href="" target="_blank"><span class="fa fa-google-plus"></span> Plus</a>
                            <a class="bg-pinterest" href="" target="_blank"><span class="fa fa-pinterest"></span> Pin</a>
                            <a class="bg-email" href="" target="_blank"><span class="fa fa-envelope"></span> Gmail</a>
                        </div>
                    </div>
                </div>
                <div class="thongbao-phai mt-200">
                    <div class="card-thongbao">
                        <div class="tintucmoi">
                            <li class="list-group-item bg-dark"><h6 class="ttmoi text-white">TIN TỨC MỚI</h6></li>
                            <?php foreach ($dstball as $row) { ?>
                                <li><a href='?act=chitietthongbao&idtb=<?=$row['idtb']?>'><?=$row['tieude']?></a></li>
                            <?php } ?>
                        </div>
                        <div class="tintuccu mt-20">
                            <li class="list-group-item bg-dark"><h6 class="ttmoi text-white">TIN TỨC CŨ</h6></li>
                            <li><a href="">Garden Riverside: Tận hưởng chất lượng sống sinh thái bên sông</a></li>
                            <li><a href="">Celesta Rise đưa phong cách nghỉ dưỡng vào không gian sống</a></li>
                            <li><a href="">Long An chi 13.000 tỷ đồng xây dựng 8 công trình giao thông quan trọng</a></li>
                            <li><a href="">The Residence Phú Quốc mở bán biệt thự 2 mặt tiền tại Bãi Trường</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>