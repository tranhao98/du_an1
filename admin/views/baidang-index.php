<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded ">
        <div class="col-8 text-left h-100 p-0 p-3 mt-n1">
            <h5 class="font-weight-bold">Quản lý bài đăng</h5>
        </div>
        <div class="col-4 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bài đăng</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-12 p-3 shadow-sm bg-white rounded">
            <h5 class="mb-3 font-weight-bold">Danh Sách Bài Đăng </h5>
            <?php if (isset($message) && $message != "") {
                echo $message;
            } ?>
            <table class="table-tb-nd text-nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">#</th>
                        <th scope="col" style="width: 35%;">Thông tin bài đăng</th>
                        <th scope="col" style="width: 10%;">Hình ảnh</th>
                        <th scope="col" style="width: 10%;">Giá</th>
                        <th scope="col" style="width: 10%;">Nổi bật</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($sanpham as $row => $sanpham) {
                        $stt = $row + 1;
                        $ten = $sanpham['tensp'];
                        $id = $sanpham['idsp'];
                        $nguoidang = getNameNguoiDung($sanpham['idnguoiban'])['hoten'];
                        $khuvuc = getNameKhuVuc($sanpham['idkhuvuc'])['tenkhuvuc'];
                        $danhmuc = getNameDanhMuc($sanpham['iddm'])['tendm'];
                        $dientich = $sanpham['dientich'];
                        $phongngu = $sanpham['phongngu'];
                        $noithat = $sanpham['noithat'];
                        $hinh = $sanpham['hinh'];
                        $hinh2 = $sanpham['hinh2'];
                        $hinh3 = $sanpham['hinh3'];
                        $hinh4 = $sanpham['hinh4'];
                        $hinh5 = $sanpham['hinh5'];
                        $hinh6 = $sanpham['hinh6'];
                        $gia = $sanpham['gia'];
                        $mota = $sanpham['mota'];
                        $noibat = $sanpham['noibat'];
                        $anhien = $sanpham['anhien'];
                        $diachi = $sanpham['diadiem'];
                        if ($anhien == 1) $anhien = '<span class="text-primary" style="font-weight: bold;">Hiển thị</span>';
                        else $anhien = '<span class="text-danger" style="font-weight: bold;">Ẩn</span>';
                        if ($noibat == 1) $noibat = "checked";
                        else $noibat = "";
                        $linkedit = "?ctrl=baidang&act=edit&id=" . $id;
                        $linkdel = "?ctrl=baidang&act=delete&id=" . $id;
                    ?>
                        <tr>
                            <th scope="col"><?= $stt ?></th>
                            <td>
                                <span class="text-secondary font-weight-bold">Tên bài viết:</span> <?= _substr($ten, 80) ?><br>
                                <span class="text-secondary font-weight-bold">Người đăng:</span> <?= $nguoidang ?><br>
                                <span class="text-secondary font-weight-bold">Danh mục:</span> <?= $danhmuc ?><br>
                                <span class="text-secondary font-weight-bold">Khu vực:</span> <?= $khuvuc ?><br>
                                <span class="text-secondary font-weight-bold">Diện tích:</span> <?= $dientich ?><br>
                                <span class="text-secondary font-weight-bold">Phòng ngủ:</span> <?= $phongngu ?><br>
                                <span class="text-secondary font-weight-bold">Nội thất:</span> <?= $noithat ?><br>
                                <span class="text-secondary font-weight-bold">Trạng thái:</span> <?= $anhien ?><br>
                                <span class="text-secondary font-weight-bold">Địa chỉ:</span> <?= $diachi ?>

                            </td>
                            <td class="text-wrap">
                                <em>Hình 1</em>
                                <img src="../upload/<?= $hinh ?>" alt="" onerror="this.src ='../upload/message.jpg'">
                                <em>Hình 2</em>
                                <img src="../upload/<?= $hinh2 ?>" alt="" onerror="this.src ='../upload/message.jpg'">
                                <em>Hình 3</em>
                                <img src="../upload/<?= $hinh3 ?>" alt="" onerror="this.src ='../upload/message.jpg'">
                                <em>Hình 4</em>
                                <img src="../upload/<?= $hinh4 ?>" alt="" onerror="this.src ='../upload/message.jpg'">
                                <em>Hình 5</em>
                                <img src="../upload/<?= $hinh5 ?>" alt="" onerror="this.src ='../upload/message.jpg'">
                                <em>Hình 6</em>
                                <img src="../upload/<?= $hinh6 ?>" alt="" onerror="this.src ='../upload/message.jpg'">
                            </td>
                            <td class="text-center"><?= number_format($gia, 0, ',', '.') ?>đ</td>
                            <td class="align-middle text-center"><input type="checkbox" name="" id="" <?= $noibat ?>></td>
                            <td class="text-wrap"><?= _substr($mota, 50) ?></td>
                            <td class="align-middle"><a href="<?= $linkedit ?>"><i class='far fa-edit' style='font-size:20px'></i></a></td>
                            <td class="align-middle"><a onclick="return confirm('Bạn có muốn xóa không?')" href="<?= $linkdel ?>"><i class="fa fa-trash text-danger" style="font-size:20px"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>