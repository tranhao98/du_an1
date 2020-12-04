<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Thanh toán</a>
    <?php if(isset($_SESSION['goitv']) && $_SESSION['goitv'] > 0) { 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
    } else { ?>
    <div class="priceing-table w3l">
        <div class="wrap">
            <div class="priceing-table-main row mt-4 m-0">
                <div class="price-grid col-12">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr2">
                            <h4>Gói Thành viên</h4>
                            <h3>147.317VNĐ</h3>
                            
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li>Quyền hạn đăng bài</li>
                                    <li>Free Updates</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-selet pric-sclr2">
                            <a class="" href="" data-toggle="modal" data-target="#staticBackdrop">Mua Ngay</a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<?php require_once "goithanhvien.php";
?>