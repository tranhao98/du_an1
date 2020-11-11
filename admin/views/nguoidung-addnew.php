<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-5 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Thêm thông tin người dùng</h5>
        </div>
        <div class="col-7 h-100 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item">Tổng quan</li>
                    <li class="breadcrumb-item">Quản lý người dùng</li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm thông tin người dùng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Thêm người dùng</h5>
        <form enctype="multipart/form-data" class="mx-auto w-100 bg-input" method="post" action="?ctrl=nguoidung&act=addnew">
            <div class="row">
                <div class="form-group col-3">
                    <label for="">Tên Người Dùng</label>
                    <input type="text" name="tennguoidung" id="" class="form-control" placeholder="Tên người dùng" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Ngày Sinh</label>
                    <input type="date" name="ngaysinh" id="" class="form-control" placeholder="Ngày sinh" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label class="mb-3" for="">Giới Tính</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh1" value="1">
                        <label class="form-check-label" for="gioitinh1">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh0" value="0">
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
                    <input type="text" name="tendangnhap" id="" class="form-control" placeholder="Tên đăng nhập" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Mật Khẩu</label>
                    <input type="text" name="matkhau" id="" class="form-control" placeholder="Mật khẩu" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" name="sodienthoai" id="" class="form-control" placeholder="Số điện thoại" aria-describedby="helpId">
                </div>
            </div>
            <div class="row">

                <div class="form-group col-3">
                    <label for="">Tỉnh/Thành phố</label>
                    <select id="tinhthanh" class="form-control" name="tinhthanh" placeholder="Tỉnh/Thành phố">
                        <option value="" selected>--Chọn Tỉnh/Thành phố--</option>
                        <?php
                        foreach ($dstinhthanh as $row) { ?>
                            <option value=" <?= $row['matp'] ?> "> <?= $row['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="">Quận/Huyện</label>

                    <select id="quanhuyen" class="form-control" name="quanhuyen" placeholder="Quận/Huyện">
                        <option value="" selected>--Chọn Quận/Huyện--</option>
                        <?php foreach ($dsquanhuyen as $row) { ?>
                            <option value="<?= $row['maqh'] ?>"><?= $row['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="">Phường/Xã</label>
                    <select id="phuongxa" class="form-control" name="quanhuyen" placeholder="Quận/Huyện">
                        <option value="" selected>--Chọn Phường/Xã--</option>
                        <?php foreach ($dsphuongxa as $row) { ?>
                            <option value="<?= $row['xaid'] ?>"><?= $row['name'] ?></option>
                        <?php } ?>

                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="">Địa Chỉ</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="Ví dụ: Số 18 Quang Trung" aria-describedby="helpId">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="anhien" id="anhien1" value="1">
                        <label class="form-check-label" for="anhien1">Hiện</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="anhien" id="anhien0" value="0">
                        <label class="form-check-label" for="anhien0">Ẩn</label>
                    </div>
                </div>
            </div>
            <input name="idtb" value="<?= $row['idtb'] ?>" type="hidden">
            <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
            <button type="submit" class="btn btn-danger">Thêm</button>
        </form>
    </div>
</div>