<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Sửa thông tin người dùng</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item"><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item"><a class="text-dark" href="#">Người dùng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sửa thông tin người dùng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <form enctype="multipart/form-data" class="mx-auto w-100 bg-input" method="post" action="?ctrl=nguoidung&act=update">
            <div class="form-group">
                <?php
                $hinh = "../upload/" . $row['hinh'];
                if (is_file($hinh)) {
                    $hinh = "<img src='$hinh' style='width:150px'>";
                } else $hinh = "<img src = '../upload/noimg.jpg' style='width:150px'>";
                ?>
                <label for="exampleinput requiredPassword1">Hình ảnh</label>
                <input type="file" name="hinh" class="form-control" id="exampleinput requiredPassword1">
                <?= $hinh ?>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label for="">Tên Người Dùng</label>
                    <input type="text" name="tennguoidung" id="" class="form-control" value="<?= $row['hoten'] ?>" placeholder="Tên người dùng" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Ngày Sinh</label>
                    <input type="date" name="ngaysinh" id="" class="form-control" value="<?= $row['ngaysinh'] ?>" placeholder="Ngày sinh" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label class="mb-3" for="">Giới Tính</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gioitinh" <?php if ($row['gioitinh'] == 1) echo "checked"; ?> id="gioitinh1" value="1">
                        <label class="form-check-label" for="gioitinh1">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gioitinh" <?php if ($row['gioitinh'] == 0) echo "checked"; ?> id="gioitinh0" value="0">
                        <label class="form-check-label" for="gioitinh0">Nữ</label>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label class="mb-3" for="">Vai Trò</label> <br>
                    <div class="custom-control custom-checkbox">
                        <?php
                        if ($row['vaitro'] == 1) $vaitro = 'checked';
                        ?>
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="noibat" value="1" <?php if (isset($vaitro)) echo $vaitro ?>>
                        <label class="custom-control-label" for="customCheck1">Quản trị viên</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label for="">Tên Đăng Nhập</label>
                    <input type="text" name="tendangnhap" id="" class="form-control" value="<?= $row['tendangnhap'] ?>" placeholder="Tên đăng nhập" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Mật Khẩu</label>
                    <input type="text" name="matkhau" id="" class="form-control" value="<?= $row['matkhau'] ?>" placeholder="Mật khẩu" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" value="<?= $row['email'] ?>" placeholder="Email" aria-describedby="helpId">
                </div>
                <div class="form-group col-3">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" name="sodienthoai" id="" class="form-control" value="<?= $row['sodienthoai'] ?>" placeholder="Số điện thoại" aria-describedby="helpId">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label for="">Tỉnh/Thành phố</label>
                    <select id="tinhthanh" class="form-control" name="tinhthanh" required placeholder="Tỉnh/Thành phố">
                        <option value="">--Chọn Tỉnh--</option>
                        <?php
                        include "connection.php";
                        $sql = "SELECT * FROM tinhthanhpho";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result as $row) {
                            echo '<option value="' . $row["matp"] . '">' . $row["name"] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group col-3">
                    <label for="">Quận/Huyện</label>
                    <select id="quanhuyen" class="form-control" name="quanhuyen" required placeholder="Quận/Huyện">
                        <option value="">--Chưa Chọn Tỉnh--</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="">Phường/Xã</label>
                    <select id="phuongxa" class="form-control" name="phuongxa" required placeholder="Phường/Xã">
                        <option value="">--Chưa chọn Quận/Huyện--</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="">Địa Chỉ</label>
                    <input type="text" name="diachi" id="diachi" class="form-control" value="<?= $row['diachi'] ?>" placeholder="Ví dụ: Số 18 Quang Trung" aria-describedby="helpId">
                </div>
            </div>
            <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
            <input name="id" value="<?= $_GET['id'] ?>" type="hidden">
            <button type="submit" class="btn btn-danger">Sửa</button>
        </form>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
        $("#tinhthanh").change(function(event) {
            tinhthanhId = $("#tinhthanh").val();
            $.post('views/quanhuyen.php', {
                "tinhthanhid": tinhthanhId
            }, function(data) {
                $("#quanhuyen").html(data);
            });
        });
        $("#quanhuyen").change(function(event) {
            quanhuyenId = $("#quanhuyen").val();
            $.post('views/phuongxa.php', {
                "quanhuyenid": quanhuyenId
            }, function(data) {
                $("#phuongxa").html(data);
            });
        });
    });
</script>