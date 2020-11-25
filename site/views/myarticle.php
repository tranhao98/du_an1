<div class="list-group">

    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Bài đăng của bạn</a>
</div>
<section class="section" id="trainers">
    <div class="row m-0 mt-3">
        <?php foreach ($dsnguoidung as $row) { ?>
            <div class="col-12 p-2">
                <div class="trainer-item" style="height: 100% !important; margin:0; padding: 15px;">
                    <div class="row">
                        <div class="col-5">
                            <div class="image-thumb" style="height: 100%;" >
                                <a href=""><img src="../upload/<?= $row['hinh'] ?>" onerror="this.src = '../upload/noimg.jpg';" style="height: 100% !important;" width="100%"></a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="down-content">
                                <span style="margin: 0;">
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
                                <a class="btn btn-primary" href="">Chỉnh sửa bài viết</a>
                                <a class="btn btn-danger" href="">Xóa bài viết</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="pagination_container mt-2"> <?= $links; ?> </div>
</section>