
    <div class="container padd0">
        <div class="row">
            <div class="card-thongbao">
                <div class="thongbao-trai mt-100">
                    <?php
                        $dem = 1;
                        foreach ($dsthongbao as $row) {
                    ?>
                        <article class="tabs" id='tabs-<?= $dem++ ?>'>
                            <h4><?=$row['tieude']?></h4>

                            <p><i class="fa fa-user"></i> <?php echo getNameNguoiDung($row['idnguoidang'])['hoten'];?> &nbsp;|&nbsp; <i class="fa fa-calendar"></i> <?=$row['ngaydang']?> &nbsp;|&nbsp; <i class="fa fa-comments"></i> <?=demsoBinhLuanTheoTB($row['idtb'])?> bình luận</p>
                            
                            <div class="nd-tintucleft">
                                <?php
                                    if($row['hinh'] == NULL)  echo "<img src='../../upload/1.png'>";
                                    else  echo "<img style='height: 180px; object-fit:cover; width:100%;' src='../upload/".$row['hinh']."' >";
                                ?>
                            </div>

                            <div class="nd-tintucright">
                                <p class="justify"><?=_substr($row['noidung'], 400)?></p>
                                <div class="button-seemore">
                                    <a href="?act=chitietthongbao&idtb=<?=$row['idtb']?>">Đọc tiếp</a>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                    <div class="main-button" style="text-align:center;">
                        <br>
                        <div class="pagination_container"> <?= $link; ?> </div>
                        <br>
                    </div>
                </div>
                <div class="thongbao-phai mt-100">
                    <div class="card-thongbao">
                        <div class="tintuccu mt-20">
                            <li class="list-group-item bg-dark"><h6 class="ttmoi text-white">TIN TỨC KHÁC</h6></li>
                            <li class="justify text-blue"><a href="">Garden Riverside: Tận hưởng chất lượng sống sinh thái bên sông</a></li>
                            <li class="justify text-blue"><a href="">Celesta Rise đưa phong cách nghỉ dưỡng vào không gian sống</a></li>
                            <li class="justify text-blue"><a href="">Long An chi 13.000 tỷ đồng xây dựng 8 công trình giao thông quan trọng</a></li>
                            <li class="justify text-blue"><a href="">The Residence Phú Quốc mở bán biệt thự 2 mặt tiền tại Bãi Trường</a></li>
                        </div>
                        <div class="tintuckhac mt-20">
                            <li class="list-group-item bg-dark"><h6 class="ttmoi text-white">TIN TỨC KHÁC</h6></li>
                            <li class="list-group-item"><img src="../upload/tintuc1.gif" alt=""></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>