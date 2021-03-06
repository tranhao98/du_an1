<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-5 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Thêm thông tin bài đăng</h5>
        </div>
        <div class="col-7 h-100 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item"><a href="" class="text-dark">Tổng quan</a></li>
                    <li class="breadcrumb-item"><a href="" class="text-dark">Bài đăng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm thông tin bài đăng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Thêm bài đăng</h5>
        <form action="?ctrl=baidang&act=insert" method="POST" class="mx-auto w-100 bg-input" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Tiêu đề bài viết:</label>
                <input required type="text" class="form-control" id="name" name="tieude" placeholder="Tiêu đề">
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="exampleinput requiredPassword1">Hình ảnh 1:</label>
                    <input required type="file" class="form-control" id="exampleinput requiredPassword1" name="hinhanh">
                </div>
                <div class="form-group col-6">
                    <label for="exampleinput requiredPassword2">Hình ảnh 2:</label>
                    <input required type="file" class="form-control" id="exampleinput requiredPassword2" name="hinhanh2">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="exampleinput requiredPassword3">Hình ảnh 3:</label>
                    <input required type="file" class="form-control" id="exampleinput requiredPassword3" name="hinhanh3">
                </div>
                <div class="form-group col-6">
                    <label for="exampleinput requiredPassword4">Hình ảnh 4:</label>
                    <input required type="file" class="form-control" id="exampleinput requiredPassword4" name="hinhanh4">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="exampleinput requiredPassword5">Hình ảnh 5:</label>
                    <input required type="file" class="form-control" id="exampleinput requiredPassword5" name="hinhanh5">
                </div>
                <div class="form-group col-6">
                    <label for="exampleinput requiredPassword6">Hình ảnh 6:</label>
                    <input required type="file" class="form-control" id="exampleinput requiredPassword6" name="hinhanh6">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">Giá:</label>
                    <input required type="number" class="form-control" id="name" name="gia" placeholder="Giá">
                </div>
                <div class="form-group col-6">
                    <label for="tieude">Người Đăng:</label>
                    <select class="form-control" name="idnguoidang" placeholder="Người Dùng">
                        <?php
                        foreach ($nguoidung as $nd) { ?>
                            <option value=" <?= $nd['id'] ?> "> <?= $nd['hoten'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mô tả:</label>
                <textarea required class="form-control" id="editor0" rows="5" style="resize: none" name="mota" placeholder="Mô tả sản phẩm..."></textarea>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <select class="custom-select col-12" required name="khuvuc">
                        <option selected>Chọn khu vực</option>
                        <?php
                        foreach ($dskv as $kv) {
                        ?>
                            <option value="<?= $kv['idkhuvuc'] ?>"><?= $kv['tenkhuvuc'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-6">
                    <select class="custom-select col-12" required name="danhmuc">
                        <option selected>Chọn danh mục</option>
                        <?php
                        foreach ($dsdm as $dm) {
                        ?>
                            <option value="<?= $dm['iddm'] ?>"><?= $dm['tendm'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="exampleinput">Nội thất:</label>
                    <input required type="text" class="form-control" id="exampleinput" name="noithat" placeholder="Nội thất">
                </div>
                <div class="form-group col-4">
                    <label for="exampleinput">Phòng ngủ:</label>
                    <input required type="text" class="form-control" id="exampleinput" name="phongngu" placeholder="Phòng ngủ">
                </div>
                <div class="form-group col-4">
                    <label for="exampleinput requiredPassword1">Diện tích:</label>
                    <input required type="text" class="form-control" id="exampleinput" name="dientich" placeholder="Diện tích">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="">Tỉnh / Thành phố:</label>
                    <select id="tinhthanh" class="form-control" placeholder="Tỉnh/Thành phố" required name="tinhthanhpho">
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
                <div class="form-group col-4">
                    <label for="">Quận / Huyện:</label>
                    <select id="quanhuyen" class="form-control" placeholder="Quận/Huyện" required name="quanhuyen">
                        <option value="">--Chưa Chọn Tỉnh--</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="">Phường / Xã:</label>
                    <select id="phuongxa" class="form-control" placeholder="Quận/Huyện" required name="phuongxa">
                        <option value="">--Chưa chọn Quận/Huyện--</option>
                    </select>
                </div>
            </div>


            <div class="row">
                <!-- <div class="form-group col-5">
                        <label for="name">Thứ tự:</label>
                        <input required type="text" class="form-control" id="name" name="thutu">
                    </div> -->
                <div class="form-group col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="anhien" id="anhien1" value="1">
                        <label class="form-check-label" for="anhien1">Hiện</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="anhien" id="anhien0" value="0">
                        <label class="form-check-label" for="anhien0">Ẩn</label>
                    </div>
                </div>
                <div class="form-group col-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="noibat" value="1">
                        <label class="custom-control-label" for="customCheck1">Nổi bật</label>
                    </div>
                </div>

            </div>

            <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
            <button type="submit" class="btn btn-danger">Thêm bài viết</button>

        </form>
    </div>

</div>

<script>
    CKEDITOR.replace('editor0');

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