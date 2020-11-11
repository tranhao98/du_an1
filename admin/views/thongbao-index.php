

<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Danh sách thông báo</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Quản lý thông báo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách thông báo</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Tất Cả Thông Báo</h5>
        <table class="w-100 mx-auto border table-tb-nd">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Tiêu Đề</th>
                    <th scope="col">Ngày Đăng</th>
                    <th scope="col">Người Đăng</th>
                    <th scope="col">Nội Dung</th>
                    <th scope="col">Ẩn Hiện</th>
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
                        <td><?=$row['hinh']?></td>

                        <td><?= $row['tieude'] ?></td>

                        <td><?= $row['ngaydang'] ?></td>
                        
                        <td>
                            <?php echo getNameNguoiDung($row['idnguoidang'])['hoten'];?>
                        </td>

                        <td><?= $row['noidung'] ?></td>
                        
                        <td><?= ($row['anhien'] == 1) ? 'Hiện' : 'Ẩn'; ?></td>
                        <td class="align-middle"> <a href="index.php?ctrl=thongbao&act=edit&idtb=<?= $row['idtb'] ?>"><i class='far fa-edit' style='font-size:18px'></i></a> </td>
                        <td class="align-middle"> <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?ctrl=thongbao&act=delete&idtb=<?= $row['idtb'] ?>"><i class="fa fa-trash text-danger" style="font-size:18px"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>