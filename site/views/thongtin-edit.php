<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Thông tin</a>
    <div class="d-flex w-100 justify-content-between">
        <form enctype="multipart/form-data" class="mt-3 mb-3 mx-auto w-100 bg-input" method="post" action="?ctrl=user&act=update-info">
            <div class="form-gruop">
                <label for="exampleinput requiredPassword1">Hình ảnh</label>
                <input type="file" name="hinh" class="form-control" id="exampleinput requiredPassword1">
            </div>
            <div class="form-group">
                <label for="">Tên Người Dùng</label>
                <input type="text" name="tennguoidung" id="" class="form-control" placeholder="Tên người dùng" aria-describedby="helpId" value="<?= $row['hoten'] ?>">
            </div>
            <div class="form-group">
                <label for="">Ngày Sinh</label>
                <input type="date" name="ngaysinh" id="" class="form-control" placeholder="Ngày sinh" aria-describedby="helpId" value="<?= $row['ngaysinh'] ?>">
            </div>
            <div class="form-group">
                <label class="mb-3" for="">Giới Tính</label> <br>
                <div class="form-check form-check-inline">
                    <?php
                    $nam = "";
                    $nu = "";
                    if ($row['gioitinh'] == 1) $nam = "checked";
                    else $nu = "checked";
                    ?>
                    <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh1" value="1" <?= $nam ?>>
                    <label class="form-check-label" for="gioitinh1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh0" value="0" <?= $nu ?>>
                    <label class="form-check-label" for="gioitinh0">Nữ</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Tên Đăng Nhập</label>
                <input type="text" disabled name="tendangnhap" id="" class="form-control" placeholder="Tên đăng nhập" aria-describedby="helpId" value="<?= $row['tendangnhap'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId" value="<?= $row['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="text" name="sodienthoai" id="" class="form-control" placeholder="Số điện thoại" aria-describedby="helpId" value="<?= '0' . $row['sodienthoai'] ?>">
            </div>
            <div class="form-group">
                <label for="">Địa Chỉ</label>
                <textarea type="text" name="diachi" id="" class="form-control" placeholder="Ví dụ: Số 18 Quang Trung" aria-describedby="helpId"><?= $row['diachi']?></textarea>
            </div>
            <div class="form-group">
                <label for="">Tỉnh/Thành phố <span class="text-danger">(*)</span></label>
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
            <div class="form-group">
                <label for="">Quận/Huyện <span class="text-danger">(*)</span></label>
                <select id="quanhuyen" class="form-control" name="quanhuyen" required placeholder="Quận/Huyện">
                    <option value="">--Chưa Chọn Tỉnh--</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Phường/Xã <span class="text-danger">(*)</span></label>
                <select id="phuongxa" class="form-control" name="phuongxa" required placeholder="Phường/Xã">
                    <option value="">--Chưa chọn Quận/Huyện--</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?=$_SESSION['sid']?>">
            <button type="submit" class="btn btn-primary">Thay đổi</button>
            <span class="text-danger">(*)</span><span> không được bỏ trống</span>
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