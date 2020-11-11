<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Danh sách người dùng</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item">Quản lý người dùng</li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách người dùng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Thông Tin Người Dùng</h5>
        <table class="w-100 mx-auto border table-tb-nd">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Thông tin người dùng</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Vai trò</th>
                        <th scope="col">Ẩn Hiện</th>
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
                        <td><?=$row['hinh']?></td>
                        <td>
                            <?=$row['hoten']?>,
                            <?=$row['ngaysinh']?><br>
                            <?=$row['email']?><br>
                            <a>Phường <?=$row['phuongxa']?></a>,
                            <?=$row['quanhuyen']?>,
                            <?=$row['tinhthanh']?><br>
                            <a>Giới Tính: <?=($row['gioitinh']==1)? 'Nam':'Nữ'; ?></a>
                        </td>
                        <td><?=$row['tendangnhap']?></td>
                        <td><?=$row['matkhau']?></td>
                        <td><?=$row['sodienthoai']?></td>
                        <td><?=$row['vaitro']?></td>
                        <td> <?=($row['anhien']==1)? 'Ẩn':'Hiện'; ?></td>
                        <td class="align-middle"> <a href="index.php?ctrl=thongbao&act=edit&idtb=<?= $row['idtb'] ?>"><i class='far fa-edit' style='font-size:18px'></i></a> </td>
                        <td class="align-middle"> <a class="txt-danger" onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?ctrl=thongbao&act=delete&idtb=<?= $row['idtb'] ?>"><i class="fa fa-trash text-danger" style="font-size:18px"></i></a> </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</div>