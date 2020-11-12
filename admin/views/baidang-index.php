<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded ">
        <div class="col-8 text-left h-100 p-0 p-3 mt-n1">
            <h5 class="font-weight-bold">Quản lý bài đăng</h5>
        </div>
        <div class="col-4 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lý bài đăng</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-12 p-3 shadow-sm bg-white rounded">
            <h5 class="mb-5 font-weight-bold">Danh Sách Bài Đăng </h5>
            <table class="table-tb-nd" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">#</th>
                        <th scope="col" style="width: 35%;">Thông tin bài đăng</th>
                        <th scope="col" style="width: 10%;">Hình ảnh</th>
                        <th scope="col" style="width: 10%;">Giá</th>
                        <th scope="col" style="width: 10%; text-align: center;">Nổi bật</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($sanpham as $row => $sanpham){
                            $stt = $row + 1;
                            $ten = $sanpham['tensp'];
                            $nguoidang = getNameNguoiDung($sanpham['idnguoiban'])['hoten'];
                            $khuvuc = getNameKhuVuc($sanpham['idkhuvuc'])['tenkhuvuc'];
                            $danhmuc = getNameDanhMuc($sanpham['iddm'])['tendm'];
                            $dientich = $sanpham['dientich'];
                            $phongngu = $sanpham['phongngu'];
                            $noithat = $sanpham['noithat'];
                            $hinh = $sanpham['hinh'];
                            $gia = $sanpham['gia'];
                            $mota = $sanpham['mota'];
                            $noibat = $sanpham['noibat'];
                            if($noibat == 1) $noibat = "checked" ; else $noibat = "";
                            $linkedit = "";
                            $linkdel = "";
                    ?>
                    <tr>
                        <th scope="col"><?=$stt?></th>
                        <td>
                            Tên bài viết: <?=$ten?><br>
                            Người đăng: <?=$nguoidang?><br>
                            Danh mục: <?=$danhmuc?><br>
                            Khu vực: <?=$khuvuc?><br>
                            Diện tích: <?=$dientich?><br>
                            Phòng ngủ: <?=$phongngu?><br>
                            Nội thất: <?=$noithat?><br>
                        </td>
                        <td><img src="" alt="" onerror="this.src ='../upload/<?=$hinh?>'"></td>
                        <td><?=number_format($gia, 0, ',', '.')?>đ</td>
                        <td><input type="checkbox" name="" id="" <?=$noibat?>></td>
                        <td><?=$mota?></td>
                        <td class="align-middle"><a href=""><i class='far fa-edit' style='font-size:20px'></i></a></td>
                        <td class="align-middle"><a href=""><i class="fa fa-trash text-danger" style="font-size:20px"></i></a></td>
                    </tr>
                        <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>