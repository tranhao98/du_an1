<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Sửa thông tin người dùng</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item"><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item"><a class="text-dark" href="#">Người dùng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sửa thông tin người dùng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <form enctype="multipart/form-data" class="mx-auto w-100 bg-input" method="post" action="?ctrl=nguoidung&act=update">
            <div class="form-group">
                <?php
                $hinh = "../upload/" . $row['hinh'];
                if (is_file($hinh)) {
                    $hinh = "<img src='$hinh' style='width:150px'>";
                } else $hinh = "<img src = '../upload/noimg.jpg' style='width:150px'>";
                ?>
                <label for="exampleinput requiredPassword1">Hình ảnh</label>
                <input type="file" name="hinh" class="form-control" id="exampleinput requiredPassword1">
                <?= $hinh ?>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label for="">Tên Người Dùng</label>
                    <input type="text" name="tennguoidung" id="" class="form-control" value="<?= $row['hoten'] ?>" placeholder="Tên người dùng" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Ngày Sinh</label>
                    <input type="date" name="ngaysinh" id="" class="form-control" value="<?= $row['ngaysinh'] ?>" placeholder="Ngày sinh" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label class="mb-3" for="">Giới Tính</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gioitinh" <?php if ($row['gioitinh'] == 1) echo "checked"; ?> id="gioitinh1" value="1">
                        <label class="form-check-label" for="gioitinh1">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gioitinh" <?php if ($row['gioitinh'] == 0) echo "checked"; ?> id="gioitinh0" value="0">
                        <label class="form-check-label" for="gioitinh0">Nữ</label>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label class="mb-3" for="">Vai Trò</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="vaitro" id="vaitro">
                        <label class="form-check-label" for="vaitro">Quản trị viên</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label for="">Tên Đăng Nhập</label>
                    <input type="text" name="tendangnhap" id="" class="form-control" value="<?= $row['tendangnhap'] ?>" placeholder="Tên đăng nhập" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Mật Khẩu</label>
                    <input type="text" name="matkhau" id="" class="form-control" value="<?= $row['matkhau'] ?>" placeholder="Mật khẩu" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" value="<?= $row['email'] ?>" placeholder="Email" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" name="sodienthoai" id="" class="form-control" value="<?= $row['sodienthoai'] ?>" placeholder="Số điện thoại" aria-describedby="helpId">
                </div>
            </div>
            <div class="row">

                <div class="form-group col-3">
                    <label for="">Tỉnh/Thành phố</label>
                    <select id="tinhthanh" class="form-control" name="tinhthanh" placeholder="Tỉnh/Thành phố">
                    <?php foreach ($dstinhthanh as $dstp) {
                            if ($row['tinhthanh'] == $dstp['name']) { ?>
                                <option value="<?= $dstp['name'] ?>" selected><?= $dstp['name'] ?> </option>
                            <?php } else { ?>
                                ?>
                                <option value="<?= $dstp['name'] ?>"><?= $dstp['name'] ?></option>
                        <?php }
                        } ?>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="">Quận/Huyện</label>

                    <select id="quanhuyen" class="form-control" name="quanhuyen" placeholder="Quận/Huyện">
                    <?php foreach ($dsquanhuyen as $dsqh) {
                            if ($row['quanhuyen'] == $dsqh['name']) { ?>
                                <option value="<?= $dsqh['name'] ?>" selected><?= $dsqh['name'] ?> </option>
                            <?php } else { ?>
                                ?>
                                <option value="<?= $dsqh['name'] ?>"><?= $dsqh['name'] ?></option>
                        <?php }
                        } ?>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="">Phường/Xã</label>
                    <select id="phuongxa" class="form-control" name="phuongxa" placeholder="Quận/Huyện">
                    <?php foreach ($dsphuongxa as $dsxp) {
                            if ($row['phuongxa'] == $dsxp['name']) { ?>
                                <option value="<?= $dsxp['name'] ?>" selected><?= $dsxp['name'] ?> </option>
                            <?php } else { ?>
                                ?>
                                <option value="<?= $dsxp['name'] ?>"><?= $dsxp['name'] ?></option>
                        <?php }
                        } ?>

                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="">Địa Chỉ</label>
                    <input type="text" name="diachi" id="" class="form-control" value="<?=$row['diachi']?>" placeholder="Ví dụ: Số 18 Quang Trung" aria-describedby="helpId">
                </div>
            </div>
            <input name="id" value="<?= $row['id'] ?>" type="hidden">
            <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
            <button type="submit" class="btn btn-danger">Sửa</button>
        </form>
    </div>
</div>