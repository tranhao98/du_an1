<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Danh sách người dùng</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item">Người dùng</li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách người dùng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Thông Tin Người Dùng</h5>
        <?php if (isset($message) && $message != "") {
            echo $message;
        } ?>
        <table class="w-100 mx-auto border table-tb-nd text-nowrap">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Thông tin người dùng</th>
                    <th scope="col">Tên đăng nhập</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Vai trò</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dem = 1;
                ?>
                <?php foreach ($dsnd as $row) { ?>
                    <tr>
                        <td><?= $dem++ ?></td>
                        <td style="width:15%"><img src="../upload/<?= $row['hinh'] ?>" alt="" onerror="this.src = '../upload/noimg.jpg';"></td>
                        <td>
                            <span class="text-secondary font-weight-bold">Họ và tên:</span> <?= $row['hoten'] ?> <br>
                            <span class="text-secondary font-weight-bold">Ngày sinh:</span> <?= date('d/m/yy', strtotime($row['ngaysinh'])) ?><br>
                            <span class="text-success font-weight-bold"><?php if ($row['gioitinh'] == 1) echo "<span class='text-secondary'>Giới tính:</span> Nam"; ?></span>
                            <span class="text-danger font-weight-bold"><?php if ($row['gioitinh'] == 0) echo "<span class='text-secondary'>Giới tính:</span> Nữ"; ?></span> <br>
                            <span class="text-secondary font-weight-bold">Email:</span> <?= $row['email'] ?><br>
                            <span class="text-secondary font-weight-bold">Địa chỉ:</span> <?=$row['diachi']?>, <?= $row['phuongxa'] ?>, <?= $row['quanhuyen'] ?>, <?= $row['tinhthanh'] ?><br>
                        </td>
                        <td><?= $row['tendangnhap'] ?></td>
                        <td><?= $row['sodienthoai'] ?></td>
                        <td><span class="text-warning font-weight-bold"><?php if ($row['vaitro'] == 1) echo "Quản trị viên"; ?></span>
                            <span class="text-info font-weight-bold"><?php if ($row['vaitro'] == 0) echo "Người dùng"; ?></span></td>
                        <td class="align-middle"> <a href="index.php?ctrl=nguoidung&act=edit&id=<?= $row['id'] ?>"><i class='far fa-edit' style='font-size:18px'></i></a> </td>
                        <td class="align-middle"> <a class="txt-danger" onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?ctrl=nguoidung&act=delete&id=<?= $row['id'] ?>"><i class="fa fa-trash text-danger" style="font-size:18px"></i></a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>