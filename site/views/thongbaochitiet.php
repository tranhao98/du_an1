
    <div class="container">
        <div class="row">
            <div class="card-thongbao">
                <div class="thongbao-trai mt-100">
                    <div class="card-title">
                        <h2><?=$rowidtb['tieude']?></h2>
                        <p class="mb-20"><i class="fa fa-calendar"></i>  <?=$rowidtb['ngaydang']?> | Bất động sản</p> 
                        <h6 class="mb-20">
                            Ngày 19/11 tới đây, tại khu vực trung tâm TP.HCM, Tập đoàn Novaland sẽ ra mắt Novaland Gallery 
                            (Trung tâm Triển lãm Novaland) lớn tại miền Nam với diện tích lên tới gần 5.000 m2. 
                        </h6>
                    </div>
                    <div class="card-content">
                        <?php
                            if($rowidtb['hinh'] == NULL)  echo "<img src='../../upload/novaland-gallery.jpg'>";
                            else  echo "<img src='../upload/".$rowidtb['hinh']."' ><br><br>";
                        ?>
                        <a class="tbct-noidung">
                            <?=$rowidtb['noidung']?>
                        </a>
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
                            <li class="list-group-item bg-dark"><h6 class="ttmoi">TIN TỨC MỚI</h6></li>
                            <?php foreach ($dstb as $row) { ?>
                                <li><a href='?act=chitietthongbao&idtb=<?=$row['idtb']?>'><?=$row['tieude']?></a></li>
                            <?php } ?>
                        </div>
                        <div class="tintuccu">
                            <!-- <h4>Tin tức cũ</h4>
                            <li><a href="">Garden Riverside: Tận hưởng chất lượng sống sinh thái bên sông</a></li>
                            <li><a href="">Celesta Rise đưa phong cách nghỉ dưỡng vào không gian sống</a></li>
                            <li><a href="">Long An chi 13.000 tỷ đồng xây dựng 8 công trình giao thông quan trọng</a></li>
                            <li><a href="">Số lượng dự án BĐS nghỉ dưỡng được cấp phép tại miền Trung gấp 9 lần cả miền Bắc và miền Nam cộng lại</a></li>
                            <li><a href="">Lilama 18 xin chuyển mục đích sử dụng đất rừng tự nhiên để xây khu du lịch nghỉ dưỡng</a></li>
                            <li><a href="">The Icon – dinh thự sang trọng với thiết kế thông minh dành cho nhà đầu tư tinh nhạy</a></li>
                            <li><a href="">The Residence Phú Quốc mở bán biệt thự 2 mặt tiền tại Bãi Trường</a></li> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>