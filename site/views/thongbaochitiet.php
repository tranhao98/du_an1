
    <div class="container">
        <div class="row">
            <div class="card-thongbao">
                <div class="thongbao-trai mt-100">
                    <div class="card-title justify">
                        <h2><?=$rowidtb['tieude']?></h2>
                        <p class="mb-20"><i class="fa fa-calendar"></i>  <?=$rowidtb['ngaydang']?> | Bất động sản</p> 
                        <h6 class="mb-20 fw-7">
                            <?=$rowidtb['tieude2']?>
                        </h6>
                    </div>
                    <div class="card-content justify">
                        <?php
                            if($rowidtb['hinh'] == NULL)  echo "<img src='../../upload/novaland-gallery.jpg'>";
                            else  echo "<img src='../upload/".$rowidtb['hinh']."' ><br><br>";
                        ?>
                        <p class="tbct-noidung justify">
                            <?=$rowidtb['noidung']?>
                        </p>
                        <p class="tbct-noidung justify">
                            <?=$rowidtb['noidung2']?>
                        </p>
                        <?php
                            if($rowidtb['hinh'] == NULL)  echo "";
                            else  echo "<img src='../upload/".$rowidtb['hinh2']."' ><br><br>";
                        ?>
                        <p class="tbct-noidung justify">
                            <?=$rowidtb['noidung3']?>
                        </p>
                        <p class="tbct-noidung justify">
                            <?=$rowidtb['noidung4']?>
                        </p>
                    </div>
                    <div class="card-conclude">
                        <p class="tbct-nguoidang"><?php echo getNameNguoiDung($rowidtb['idnguoidang'])['hoten'];?></p><br>
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
                                <form action="" method="post" class="col-12 mx-auto">
                                    <div class="form-group w-100">
                                        <input type="hidden" name="id" value="<?=$_SESSION['id']?>">
                                        <input type="hidden" name="idtb" value="<?=$row['idtb']?>">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="noidung"></textarea>
                                        <input class="btn btn-primary float-right mt-2 mb-2" type="submit" value="Bình luận">
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-12 mx-auto mb-5" style="min-height: 200px;">
                                <?php foreach($all_bl as $bl){ 
                                    if($bl['idtb'] == $bl_tb['idtb']){
                                        $bl_kh = showBlKhachhang($bl['id']);
                                    ?>
                                        <div class="col-12 mt-2">
                                        <?php echo $bl_kh['hoten']; ?>
                                    <p class="mt-2"><?=$bl['noidung']?></p>
                                    </div>
                                <?php } } ?>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <div class="thongbao-phai mt-100">
                    <div class="card-thongbao">
                        <div class="tintucmoi">
                            <li class="list-group-item bg-dark justify"><h6 class="ttmoi text-white justify">TIN TỨC MỚI</h6></li>
                            <?php foreach ($dstbnew as $row) { ?>
                                <li class="justify t-bold text-blue"><a href='?act=chitietthongbao&idtb=<?=$row['idtb']?>'><?=$row['tieude']?></a></li>
                            <?php } ?>
                        </div>
                        <div class="tintuccu mt-20">
                            <li class="list-group-item bg-dark"><h6 class="ttmoi text-white">TIN TỨC CŨ</h6></li>
                            <?php foreach ($dstbold as $row) { ?>
                                <li class="justify t-bold text-blue"><a href='?act=chitietthongbao&idtb=<?=$row['idtb']?>'><?=$row['tieude']?></a></li>
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