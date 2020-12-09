<script>
    $(function() {
        $("#form_edituser").validate({
            rules: {
                tennguoidung: {
                    required: true,
                    maxlength: 30,
                    minlength: 6
                },
                ngaysinh: {
                    date: true
                },
                email: {
                    required: true,
                    email: true
                },
                sodienthoai: {
                    number: true
                },
                diachi: {
                    required: true
                },
                tinhthanh: {
                    required: true
                },
                quanhuyen: {
                    required: true
                },
                phuongxa: {
                    required: true
                },
            },
            messages: {
                tennguoidung: {
                    required: "<span class='badge badge-warning'>Bạn hãy nhập họ tên vào",
                    maxlength: "<span class='badge badge-danger'>Họ tên dài quá, phải nhỏ hơn 30 ký tự</span>",
                    minlength: "<span class='badge badge-danger'>Họ tên ngắn quá, phải lớn hơn 6 ký tự</span>"
                },
                ngaysinh: {
                    date: "<span class='badge badge-danger'>Phải đúng định dạng ngày tháng</span>"
                },
                email: {
                    required: "<span class='badge badge-warning'>Không để trống email</span>",
                    email: "<span class='badge badge-danger'>Phải đúng định dạng email</span>"
                },
                sodienthoai: {
                    number: "<span class='badge badge-danger'>Số điện thoại phải là số</span>"
                },
                diachi: {
                    required: "<span class='badge badge-warning'>Không để trống địa chỉ</span>"
                },
                tinhthanh: {
                    required: "<span class='badge badge-warning'>Hãy chọn Tỉnh/Thành</span>"
                },
                quanhuyen: {
                    required: "<span class='badge badge-warning'>Hãy chọn Quận/Huyện</span>"
                },
                phuongxa: {
                    required: "<span class='badge badge-warning'>Hãy chọn Phường/Xã</span>"
                },
            }
        });
    });
    $(document).ready(function() {
        $('body').on('click', '.change', function() {
                var regex_mobile = /((09|070|079|077|076|078|032|033|034|035|036|037|038|039|08|05)+([0-9]{8})\b)/g;
                var regex_email = /([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i;
                var mobile = $('#sodienthoai').val();
                var email = $('#email').val();
                if (mobile !== '') {
                    if (regex_mobile.test(mobile) == false) {
                        swal({
                            title: "Xảy ra lỗi!",
                            text: "Số điện thoại của bạn chưa đúng định dạng!",
                            type: "error"
                        });
                    }
                } else {
                    swal({
                        title: "Xảy ra lỗi!",
                        text: "Bạn chưa điền số điện thoại!",
                        type: "error"
                    });
                }
                if (email !== '') {
                    if (regex_email.test(email) == false) {
                        swal({
                            title: "Xảy ra lỗi!",
                            text: "Email của bạn chưa đúng định dạng!",
                            type: "error"
                        });
                    }
                } else {
                    swal({
                        title: "Xảy ra lỗi!",
                        text: "Bạn chưa nhập Email!",
                        type: "error"
                    });
                }
            });
        });
</script>
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Thông tin</a>
    <div class="d-flex w-100 justify-content-between">
        <form enctype="multipart/form-data" class="mt-3 mb-3 mx-auto w-100 bg-input" id="form_edituser" method="post" action="?ctrl=user&act=update-info">
            <div class="form-group file-upload pt-0 pl-0 pr-0 mr-0 ml-0 w-100">
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input-anhdaidien').trigger( 'click' )">Chọn ảnh đại diện</button>

                <div class="image-upload-wrap-anhdaidien">
                    <input class="file-upload-input-anhdaidien" type='file' name="hinh" onchange="readURLanhdaidien(this);" />
                    <div class="drag-text">
                        <h3>Click để tải ảnh hoặc kéo thả ảnh vào đây!</h3>
                    </div>
                </div>
                <div class="file-upload-content-anhdaidien">
                    <img class="file-upload-image-anhdaidien" src="#" alt="your image" />

                    <div class="image-title-wrap-anhdaidien">
                        <button type="button" onclick="removeUploadanhdaidien()" class="remove-image-anhdaidien">Xóa <span class="image-title-anhdaidien">Uploaded Image</span></button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Họ và tên</label>
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
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId" value="<?= $row['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="text" name="sodienthoai" id="sodienthoai" class="form-control" placeholder="Số điện thoại" aria-describedby="helpId" value="<?= '0' . $row['sodienthoai'] ?>">
            </div>
            <div class="form-group">
                <label for="">Địa Chỉ</label>
                <textarea type="text" name="diachi" id="" class="form-control" placeholder="Ví dụ: Số 18 Quang Trung" aria-describedby="helpId"><?= $row['diachi'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Tỉnh/Thành phố <span class="text-danger">(*)</span></label>
                <select id="tinhthanh" class="form-control" name="tinhthanh" placeholder="Tỉnh/Thành phố">
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
                <select id="quanhuyen" class="form-control" name="quanhuyen" placeholder="Quận/Huyện">
                    <option value="">--Chưa Chọn Tỉnh--</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Phường/Xã <span class="text-danger">(*)</span></label>
                <select id="phuongxa" class="form-control" name="phuongxa" placeholder="Phường/Xã">
                    <option value="">--Chưa chọn Quận/Huyện--</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?= $_SESSION['sid'] ?>">
            <button type="submit" class="btn btn-primary change">Thay đổi</button>
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