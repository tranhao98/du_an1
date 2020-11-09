<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Thêm thông báo</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Quản lý thông báo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm thông báo</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5></h5>
        <form enctype="multipart/form-data" class="mx-auto w-100" method="post" action="?ctrl=thongbao&act=insert">
            <div class="form-group">
                <label for="exampleinput requiredPassword1">Hình ảnh</label>
                <input required type="file" name="hinh" class="form-control" id="exampleinput requiredPassword1">
            </div>
            <div class="row">
                <div class="form-group col-6 ">
                    <label for="tieude">Tiêu Đề</label>
                    <input type="text" class="form-control" id="tieude" name="tieude" placeholder="Tiêu Đề">
                </div>
                <div class="form-group col-6 ">
                    <label for="tieude">Ngày Đăng</label>
                    <input type="date" class="form-control" name="Ngày Đăng">
                </div>
            </div>
            <div class="row">
                <!-- Nội dung -->
                <div class="form-group col-6">
                    <label for="tieude">Nội Dung</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" id="noidung" name="noidung" placeholder="... ... ..." rows="3"></textarea>
                </div>
                <!-- Người dùng -->
                <div class="form-group col-6">
                    <label for="tieude">Người Đăng</label>
                    <select class="form-control" name="ma_loai" placeholder="Người Dùng">
                        <option value="">Người Dùng</option>
                        <?php
                        foreach ($nguoidung as $nd) { ?>
                            <option value=" <?= $nd['idnguoidung'] ?> "> <?= $nd['tennguoidung'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <!-- Ẩn hiện -->
            <div class="row">
                <div class="form-group col-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="anhien" id="anhien1" value="1">
                        <label class="form-check-label" for="anhien0">Hiện</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="anhien" id="anhien0" value="0">
                        <label class="form-check-label" for="anhien0">Ẩn</label>
                    </div>
                </div>
            </div>
            <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
            <button type="submit" class="btn btn-danger">Thêm</button>
        </form>
    </div>
</div>