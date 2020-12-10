<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action bg-dark text-white mb-2">Thông tin</a>
    <?php if (isset($_SESSION['mess'])) echo $_SESSION['mess'];
        unset($_SESSION['mess']);
        ?>
    <div class="d-flex w-100 justify-content-between">
        <form enctype="multipart/form-data" class="mt-3 mb-3 mx-auto w-100 bg-input" method="post" action="?ctrl=nguoidung&act=insert">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input disabled type="text" name="tennguoidung" id="" class="form-control" placeholder="Tên người dùng" aria-describedby="helpId" value="<?= $row['hoten'] ?>">
            </div>
            <div class="form-group">
                <label for="">Ngày Sinh</label>
                <input disabled type="date" name="ngaysinh" id="" class="form-control" placeholder="Ngày sinh" aria-describedby="helpId" value="<?= $row['ngaysinh'] ?>">
            </div>
            <div class="form-group">
                <label class="mb-3" for="">Giới Tính</label> <br>
                <div class="form-check form-check-inline">
                    <?php
                    $nam = "";
                    $nu = "";
                    if ($row['gioitinh'] == 1) $nam = "checked";
                    else $nu = "checked";
                    ?>
                    <input disabled class="form-check-input" type="radio" name="gioitinh" id="gioitinh1" value="1" <?= $nam ?>>
                    <label class="form-check-label" for="gioitinh1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input disabled class="form-check-input" type="radio" name="gioitinh" id="gioitinh0" value="0" <?= $nu ?>>
                    <label class="form-check-label" for="gioitinh0">Nữ</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Tên Đăng Nhập</label>
                <input disabled type="text" name="tendangnhap" id="" class="form-control" placeholder="Tên đăng nhập" aria-describedby="helpId" value="<?= $row['tendangnhap'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input disabled type="email" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId" value="<?= $row['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input disabled type="text" name="sodienthoai" id="" class="form-control" placeholder="Số điện thoại" aria-describedby="helpId" value="<?= '0' . $row['sodienthoai'] ?>">
            </div>
            <div class="form-group">
                <label for="">Địa Chỉ</label>
                <textarea disabled type="text" name="diachi" id="" class="form-control" placeholder="Ví dụ: Số 18 Quang Trung" aria-describedby="helpId"><?= $row['diachi'] . " - ". $row['phuongxa']. " - ".$row['quanhuyen']. " - ". $row['tinhthanh'] ?></textarea>
            </div>
        </form>
    </div>
</div>