<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-5 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Sửa thông tin bài đăng</h5>
        </div>
        <div class="col-7 h-100 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item"><a href="" class="text-dark">Tổng quan</a></li>
                    <li class="breadcrumb-item"><a href="" class="text-dark">Bài đăng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sửa thông tin bài đăng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Sửa bài đăng</h5>
        <form action="?ctrl=baidang&act=update" method="POST" class="mx-auto w-100 bg-input" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Tiêu đề bài viết:</label>
                <input required type="text" class="form-control" id="name" name="tieude" value="<?= $baiviet['tensp'] ?>">
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">Giá:</label>
                    <input required type="text" class="form-control" id="name" name="gia" value="<?= $baiviet['gia'] ?>">
                </div>
                <div class="form-group col-6">
                    <label for="tieude">Người Đăng:</label>
                    <select class="form-control" name="idnguoidang" placeholder="Người Dùng">
                        <?php
                        foreach ($nguoidung as $nd) {
                            if ($baiviet['idnguoiban'] == $nd['id']) {
                                echo '<option selected value="' . $nd['id'] . '">' . $nd['hoten'] . '</option>';
                            } else {
                                echo '<option value="' . $nd['id'] . '">' . $nd['hoten'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleinput requiredPassword1">Hình ảnh:</label>
                <input type="file" class="form-control" id="exampleinput requiredPassword1" name="hinhanh">
                <img src="../upload/<?= $baiviet['hinh'] ?>" alt="" onerror="this.src ='../upload/message.jpg'" class="mt-3" style="width: 30% !important;">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mô tả:</label>
                <textarea required class="form-control" id="exampleFormControlTextarea1 editor1" rows="5" style="resize: none" name="mota" placeholder="Mô tả sản phẩm..."><?= $baiviet['mota'] ?></textarea>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <select class="custom-select col-12" required name="khuvuc">
                        <?php
                        foreach ($dskv as $kv) {
                            if ($baiviet['idkhuvuc'] == $kv['idkhuvuc']) {
                                echo '<option selected value="' . $kv['idkhuvuc'] . '">' . $kv['tenkhuvuc'] . '</option>';
                            } else {
                                echo '<option value="' . $kv['idkhuvuc'] . '">' . $kv['tenkhuvuc'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-6">
                    <select class="custom-select col-12" required name="danhmuc">
                        <?php
                        foreach ($dsdm as $dm) {
                            if ($baiviet['iddm'] == $dm['iddm']) {
                                echo '<option selected value="' . $dm['iddm'] . '">' . $dm['tendm'] . '</option>';
                            } else {
                                echo '<option value="' . $dm['iddm'] . '">' . $dm['tendm'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="exampleinput">Nội thất:</label>
                    <input required type="text" class="form-control" id="exampleinput" name="noithat" value="<?= $baiviet['noithat'] ?>">
                </div>
                <div class="form-group col-4">
                    <label for="exampleinput">Phòng ngủ:</label>
                    <input required type="text" class="form-control" id="exampleinput" name="phongngu" value="<?= $baiviet['phongngu'] ?>">
                </div>
                <div class="form-group col-4">
                    <label for="exampleinput requiredPassword1">Diện tích:</label>
                    <input required type="text" class="form-control" id="exampleinput" name="dientich" value="<?= $baiviet['dientich'] ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Địa chỉ:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1 " rows="2" style="resize: none" required name="diachi" placeholder="Nhập số nhà, tổ, đường,..."><?= $baiviet['diadiem'] ?></textarea>
            </div>

            <div class="row">
                <!-- <div class="form-group col-5">
                        <label for="name">Thứ tự:</label>
                        <input required type="text" class="form-control" id="name" name="thutu">
                    </div> -->
                <div class="form-group col-2">
                    <div class="form-check form-check-inline">
                        <?php
                        if ($baiviet['anhien'] == 1) $anhien = 'checked';
                        ?>
                        <input class="form-check-input" type="radio" name="anhien" id="anhien1" value="1" <?php if (isset($anhien)) echo $anhien ?>>
                        <label class="form-check-label" for="anhien1">Hiện</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <?php
                        if ($baiviet['anhien'] == 0) $anhien = 'checked';
                        ?>
                        <input class="form-check-input" type="radio" name="anhien" id="anhien0" value="0" <?php if (isset($anhien)) echo $anhien ?>>
                        <label class="form-check-label" for="anhien0">Ẩn</label>
                    </div>
                </div>
                <div class="form-group col-2">
                    <div class="custom-control custom-checkbox">
                        <?php
                        if ($baiviet['noibat'] == 1) $noibat = 'checked';
                        ?>
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="noibat" value="1" <?php if (isset($noibat)) echo $noibat ?>>
                        <label class="custom-control-label" for="customCheck1">Nổi bật</label>
                        <input type="hidden" name="idbaiviet" value="<?= $_GET['id'] ?>">
                    </div>
                </div>
            </div>
            <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
            <button type="submit" class="btn btn-danger">Sửa bài viết</button>

        </form>
    </div>
</div>