<div class="list-group">
    
    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Bài đăng của bạn</a>
</div>
<section class="section" id="trainers">
    <div class="row m-0 mt-3">
        <?php foreach ($dsnguoidung as $row) { ?>
            <div class="col-lg-6 p-2">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <a href=""><img src="../upload/<?= $row['hinh'] ?>" onerror="this.src = '../upload/noimg.jpg';" height="200px" width="100%"></a>
                    </div>
                    <div class="down-content">
                        <span>
                            <?= number_format($row['gia'], 0, ",", "."); ?><?php if (strlen(strstr(strtolower($row['tensp']), "cho thuê")) > 0) echo '/tháng';
                                                                            else echo '/m<sup>2</sup>'; ?> - <?= $row['dientich'] ?> m<sup>2</sup>
                        </span>

                        <a href="">
                            <h4><?= _substr($row['tensp'], 55) ?></h4>
                        </a>

                        <p><?= $row['diadiem'] ?></p>

                        <ul class="social-icons">
                            <li><a href="  ">+ Xem thêm</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="pagination_container"> <?= $links; ?> </div>
</section>