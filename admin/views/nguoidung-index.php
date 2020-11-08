<div class="container">
    <div class="row">
        <div class="col-4 mt-4">
        <h3>Thêm người dùng </h3>
            <form enctype="multipart/form-data"  method="post" action="?ctrl=nguoidung&act=insert">
                <div class="form-group">                       
                    <label for="">ID Người Dùng </label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Tên Người Dùng</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Ngày Sinh</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Tên Đăng Nhập</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Mặt Khẩu</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Địa Chỉ</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Giới Tính</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Vai Trò</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="anhien" id="" value="1" checked>
                    Ẩn Hiện
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" name="themkv" id="" class="form-control" value="Submit" aria-describedby="helpId">
                </div>
            </form>
        </div>
        <div class="col-8 mt-4"> 
            <h3>Danh sách người dùng </h3>
            <table border="1">  
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
                        <th scope="col">Edit & Delete</th>
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
                        <td>
                            <a class="iconedit" href="?ctrl=nguoidung&act=edit&idtb=<?= $row['idkv']?>"><i style='font-size:15px' class='far'>&#xf044;</i></a>
                            <a class="icondelete" href="?ctrl=nguoidung&act=delete&idtb=<?= $row['idkv']?>"><i style='font-size:15px' class='far'>&#xf2ed;</i></a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
