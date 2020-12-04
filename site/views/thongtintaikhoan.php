<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-3" style="min-height:700px;">

            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Thông tin & Liên hệ</a>
                <a href="?ctrl=user&act=infouser" class="list-group-item list-group-item-action">Thông tin tài khoản</a>
                <a href="?ctrl=user&act=myarticle&id=<?= $_SESSION['sid'] ?>" class="list-group-item list-group-item-action">Các bài viết đã đăng</a>
                <a href="?ctrl=user&act=edit-info&id=<?= $_SESSION['sid'] ?>" class="list-group-item list-group-item-action">Thay đổi thông tin tài khoản</a>
                <a href="?ctrl=user&act=doimatkhau" class="list-group-item list-group-item-action">Đổi mật khẩu</a>
                <a href="?ctrl=user&act=thanhtoan" class="list-group-item list-group-item-action">Nâng cấp gói thành viên</a>
                <a href="?ctrl=user&act=logout" class="list-group-item list-group-item-action">Đăng xuất</a>
            </div>


        </div>
        <div class="col-7">
            <main>
                <?php if (isset($child) && file_exists($child)) require_once "$child"; ?>
            </main>
        </div>
        <div class="col-2 text-center">
            <img class="rounded" alt="200x200" src="../upload/<?= $_SESSION['hinh'] ?>" style="width: 100%">
            <?php if(isset($_SESSION['goitv']) && $_SESSION['goitv'] > 0) { ?>
                <p class="text-center mt-4" style="font-weight: bold; font-size: 13px;"><i class='fas fa-crown' style='color: yellow' ;></i> <?= $_SESSION['hoten'] ?></p>
            <?php } else { ?>
                <p class="text-center mt-4" style="font-weight: bold;"><?= $_SESSION['hoten'] ?></p>
            <?php } ?>
            <a class="text-center btn btn-success" style="font-size: 12px;" href="?ctrl=user&act=edit-info&id=<?= $_SESSION['sid'] ?>    ">Thay đổi thông tin</a>
        </div>
    </div>
</div>