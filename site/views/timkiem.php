<section class="section section-bg" id="call-to-action" style="background-image: url(views/images/banner3.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Kết quả tìm kiếm từ khóa<em><?php if ($key != "") echo '<span class="text-lowercase"> "' . $key . '" </span>';
                                                    else echo '<span class="text-lowercase"> "từ khóa" </span>';
                                                    ?></em></h2>

                </div>
            </div>
        </div>
    </div>
</section>
<?php if (isset($thongbao) && $thongbao != "") {
    echo $thongbao;
} ?>
<?php
if ($total_rows == 0) {
?>
    <div class="alert alert-danger text-center" role="alert">
        Không tìm thấy bài viết nào với từ khóa "<?=$key?>"!
    </div>
<?php
}
?>
<section class="section" id="trainers">
    <div class="container">
        <!-- <br>
        <br> -->

        <div class="row mt-5">
            <?php foreach ($dstimkiem as $row) { ?>
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
            <?php } ?>
        </div>

        <br>

        <div class="pagination_container"> <?= $links; ?> </div>

    </div>
</section>