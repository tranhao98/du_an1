<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Danh sách người dùng</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thay đổi thông tin người dùng</li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách người dùng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Thông tin người dùng</h5>
        <table class="w-100 mx-auto border table-tb-nd">
                <thead>
                    <tr>
                        <th scope="col">ID người dùng</th>
                        <th scope="col">Tên người dùng</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Vai trò</th>
                        <th scope="col">Ẩn Hiện</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>                        
                <tbody>
                    <?php foreach ($dskv as $row) { ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['tennguoidung']?></td>
                        <td><?=$row['ngaysinh']?></td>
                        <td><?=$row['tendangnhap']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['matkhau']?></td>
                        <td><?=$row['diachi']?></td>
                        <td><?=$row['gioitinh']?></td>
                        <td><?=$row['vaitro']?></td>
                        <td><?=$row['thutu']?></td>
                        <td> <?=($row['anhien']==1)? 'Ẩn':'Hiện'; ?></td>
                        <td class="align-middle"> <a href="index.php?ctrl=thongbao&act=edit&idtb=<?= $row['idtb'] ?>" class="btn-primary btn"><i class='fas fa-pencil-alt' style='font-size:24px'></i></a> </td>
                        <td class="align-middle"> <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?ctrl=thongbao&act=delete&idtb=<?= $row['idtb'] ?>" class="btn-primary btn"><i class="fa fa-trash" style="font-size:24px"></i></a> </td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
