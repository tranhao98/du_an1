<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Danh sách thông báo</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Thông báo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách thông báo</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Tất Cả Thông Báo</h5>
        <?php if (isset($message) && $message != "") {
            echo $message;
        } ?>
        <table class="w-100 mx-auto border table-tb-nd text-nowrap">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Tiêu Đề</th>
                    <th scope="col">Ngày Đăng</th>
                    <th scope="col">Nội Dung</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col">Bình Luận</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dem = 1; ?>
                <?php foreach ($dstb as $row) { ?>
                    <tr>
                        <th scope="col"><?= $dem++ ?></th>
                        <td style="width:15%">
                            <h6 class="text-center p-1" style="font-size: 12px;">Hình 1</h6>
                            <img src="../upload/<?= $row['hinh'] ?>" alt="" onerror="this.src = '../upload/noimg.jpg';"><br>
                            <h6 class="text-center p-1" style="font-size: 12px;">Hình 2</h6>
                            <img src="../upload/<?= $row['hinh2'] ?>" alt="" onerror="this.src = '../upload/noimg.jpg';">
                        </td>

                        <td class="text-wrap">
                            <h6><?= $row['tieude'] ?></h6>
                            <p>Người đăng: <?php echo getNameNguoiDung($row['idnguoidang'])['hoten']; ?></p>
                        </td>

                        <td>
                            
                            <p><?= $row['ngaydang'] ?></p>
                        
                        </td>

                        <td class="text-wrap"><?= _substr($row['noidung'], 80) ?></td>

                        <td><em class="text-success font-weight-normal"> <?php if ($row['anhien'] == 1) echo "Đang hiện"; ?></em>
                            <em class="text-danger font-weight-normal"> <?php if ($row['anhien'] == 0) echo "Đang ẩn"; ?></em></td>
                        <td><a style="font-size: 11px;" class="btn btn-primary text-white p-1" href="index.php?ctrl=binhluan&act=index&idtb=<?= $row['idtb'] ?>">Xem bình luận</a></td>

                        <td class="align-middle"> <a href="index.php?ctrl=thongbao&act=edit&idtb=<?= $row['idtb'] ?>"><i class='fas fa-edit' style='font-size:18px'></i></a> </td>
                        <td class="align-middle"> <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?ctrl=thongbao&act=delete&idtb=<?= $row['idtb'] ?>"><i class="fa fa-trash text-danger" style="font-size:18px"></i></a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>