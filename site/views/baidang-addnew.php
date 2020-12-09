<br><br><br><br>
<script>
    $(function() {
        $("#form_baidang").validate({
            rules: {
                tieude: {
                    required: true,
                    maxlength: 99,
                    minlength: 30
                },
                hinhanh: {
                    required: true
                },
                hinhanh2: {
                    required: true
                },
                hinhanh3: {
                    required: true
                },
                gia: {
                    required: true,
                    number: true
                },
                mota: {
                    required: true
                },
                khuvuc: {
                    required: true
                },
                danhmuc: {
                    required: true
                },
                noithat: {
                    required: true
                },
                phongngu: {
                    required: true
                },
                dientich: {
                    required: true
                },
                tinhthanhpho: {
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
                tieude: {
                    required: "<span class='badge badge-warning'>Vui lòng nhập tiêu đề đăng tin của bạn",
                    maxlength: "<span class='badge badge-danger'>Tiêu đề dài quá, phải nhỏ hơn 99 ký tự</span>",
                    minlength: "<span class='badge badge-danger'>Tiêu đề ngắn quá, phải lớn hơn 30 ký tự</span>"
                },
                hinhanh: {
                    required: "<span class='badge badge-warning'>Hãy chọn hình ảnh!</span>"
                },
                hinhanh2: {
                    required: "<span class='badge badge-warning'>Hãy chọn hình ảnh!</span>"
                },
                hinhanh3: {
                    required: "<span class='badge badge-warning'>Chọn tối thiểu 3 hình ảnh!</span>"
                },
                gia: {
                    required: "<span class='badge badge-warning'>Vui lòng nhập giá</span>",
                    number: "<span class='badge badge-danger'>Giá phải là số</span>"
                },
                mota: {
                    required: "<span class='badge badge-warning'>Vui lòng nhập mô tả</span>"
                },
                khuvuc: {
                    required: "<span class='badge badge-warning'>Hãy chọn khu vực</span>"
                },
                danhmuc: {
                    required: "<span class='badge badge-warning'>Hãy chọn loại</span>"
                },
                noithat: {
                    required: "<span class='badge badge-warning'>Mô tả nội thất</span>"
                },
                phongngu: {
                    required: "<span class='badge badge-warning'>Hãy nhập phòng ngủ</span>"
                },
                dientich: {
                    required: "<span class='badge badge-warning'>Hãy nhập diện tích</span>"
                },
                tinhthanhpho: {
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
</script>
<section class="section">
    <div class="container">
        <h5 style="font-size: 26px;" class="font-weight-bold mb-3 mt-3 text-center text-uppercase text-danger">Đăng bài rao bán, cho thuê nhà đất</h5>
        <p class="text-center mt-n3">(Vui lòng nhập thông tin cần bán hoặc cho thuê vào các mục dưới dây)</p>
        <em style="font-size: 14px;"><span class="text-danger">Lưu ý:</span> Thông tin có dấu <span class="text-danger">(*)</span> là bắt buộc. Không gộp nhiều bất động sản trong một tin rao.</em>
        <form action="?act=insert-baidang" method="POST" id="form_baidang" class="mx-auto w-100 mt-3 bg-input" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-12">
                    <label for="tieude">Tiêu đề bài viết<span class="text-danger">(*)</span>:</label>
                    <input type="text" class="form-control" id="tieude" name="tieude" placeholder="Tiêu đề">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4 file-upload">
                    <!-- <label for="exampleinput requiredPassword1">Hình ảnh 1:</label>
                    <input type="file" class="form-control" id="exampleinput requiredPassword1" name="hinhanh"> -->
                    <!-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> -->

                    <div class="image-upload-wrap1">
                        <input class="file-upload-input1" type='file' name="hinhanh" onchange="readURL(this);" />
                        <div class="drag-text">
                        <h3>Click để tải ảnh hoặc kéo thả ảnh vào đây!</h3>
                        </div>
                    </div>
                    <div class="file-upload-content1">
                        <img class="file-upload-image1" src="#" alt="your image" />
                        <div class="image-title-wrap1">
                            <button type="button" onclick="removeUpload()" class="remove-image1">Xóa <span class="image-title1">Uploaded Image</span></button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-4 file-upload">
                    <!-- <label for="exampleinput requiredPassword1">Hình ảnh 1:</label>
                    <input type="file" class="form-control" id="exampleinput requiredPassword1" name="hinhanh"> -->
                    <!-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> -->

                    <div class="image-upload-wrap2">
                        <input class="file-upload-input2" type='file' name="hinhanh2" onchange="readURL2(this);" />
                        <div class="drag-text">
                        <h3>Click để tải ảnh hoặc kéo thả ảnh vào đây!</h3>
                        </div>
                    </div>
                    <div class="file-upload-content2">
                        <img class="file-upload-image2" src="#" alt="your image" />
                        <div class="image-title-wrap2">
                            <button type="button" onclick="removeUpload2()" class="remove-image2">Xóa <span class="image-title2">Uploaded Image</span></button>
                        </div>
                    </div>
                </div>

                <div class="form-group col-4 file-upload">
                    <!-- <label for="exampleinput requiredPassword1">Hình ảnh 1:</label>
                    <input type="file" class="form-control" id="exampleinput requiredPassword1" name="hinhanh"> -->
                    <!-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> -->

                    <div class="image-upload-wrap3">
                        <input class="file-upload-input3" type='file' name="hinhanh3" onchange="readURL3(this);" />
                        <div class="drag-text">
                        <h3>Click để tải ảnh hoặc kéo thả ảnh vào đây!</h3>
                        </div>
                    </div>
                    <div class="file-upload-content3">
                        <img class="file-upload-image3" src="#" alt="your image" />
                        <div class="image-title-wrap3">
                            <button type="button" onclick="removeUpload3()" class="remove-image3">Xóa <span class="image-title3">Uploaded Image</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4 file-upload">
                    <!-- <label for="exampleinput requiredPassword1">Hình ảnh 1:</label>
                    <input type="file" class="form-control" id="exampleinput requiredPassword1" name="hinhanh"> -->
                    <!-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> -->

                    <div class="image-upload-wrap4">
                        <input class="file-upload-input4" type='file' name="hinhanh4" onchange="readURL4(this);" />
                        <div class="drag-text">
                        <h3>Click để tải ảnh hoặc kéo thả ảnh vào đây!</h3>
                        </div>
                    </div>
                    <div class="file-upload-content4">
                        <img class="file-upload-image4" src="#" alt="your image" />
                        <div class="image-title-wrap4">
                            <button type="button" onclick="removeUpload4()" class="remove-image4">Xóa <span class="image-title4">Uploaded Image</span></button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-4 file-upload">
                    <!-- <label for="exampleinput requiredPassword1">Hình ảnh 1:</label>
                    <input type="file" class="form-control" id="exampleinput requiredPassword1" name="hinhanh"> -->
                    <!-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> -->

                    <div class="image-upload-wrap5">
                        <input class="file-upload-input5" type='file' name="hinhanh5" onchange="readURL5(this);" />
                        <div class="drag-text">
                        <h3>Click để tải ảnh hoặc kéo thả ảnh vào đây!</h3>
                        </div>
                    </div>
                    <div class="file-upload-content5">
                        <img class="file-upload-image5" src="#" alt="your image" />
                        <div class="image-title-wrap5">
                            <button type="button" onclick="removeUpload5()" class="remove-image5">Xóa <span class="image-title5">Uploaded Image</span></button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-4 file-upload">
                    <!-- <label for="exampleinput requiredPassword1">Hình ảnh 1:</label>
                    <input type="file" class="form-control" id="exampleinput requiredPassword1" name="hinhanh"> -->
                    <!-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> -->

                    <div class="image-upload-wrap6">
                        <input class="file-upload-input6" type='file' name="hinhanh6" onchange="readURL6(this);" />
                        <div class="drag-text">
                            <h3>Click để tải ảnh hoặc kéo thả ảnh vào đây!</h3>
                        </div>
                    </div>
                    <div class="file-upload-content6">
                        <img class="file-upload-image6" src="#" alt="your image" />
                        <div class="image-title-wrap6">
                            <button type="button" onclick="removeUpload6()" class="remove-image6">Xóa <span class="image-title6">Uploaded Image</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">Giá:</label>
                    <input type="number" class="form-control" id="name" name="gia" placeholder="Giá">
                </div>
                <div class="form-group col-6">
                    <label for="tieude">Người Đăng:</label>
                    <select class="form-control" name="idnguoidang" placeholder="Người Dùng">
                        <option value="<?= $_SESSION['sid'] ?>" selected><?= $_SESSION['hoten'] ?></option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label for="exampleFormControlTextarea1">Mô tả:</label>
                    <textarea class="form-control" id="editor0" rows="5" style="resize: none;" name="mota" placeholder="Mô tả sản phẩm..."></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="exampleinput">Địa điểm<span class="text-danger">(*)</span></label>
                    <select class="custom-select col-12" name="khuvuc">
                        <option value="">--Chọn địa điểm--</option>
                        <?php
                        foreach ($dskvall as $kv) {
                        ?>
                            <option value="<?= $kv['idkhuvuc'] ?>"><?= $kv['tenkhuvuc'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="exampleinput">Loại<span class="text-danger">(*)</span></label>
                    <select class="custom-select col-12" name="danhmuc">
                        <option value="">--Phân mục--</option>
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
                    <input type="text" class="form-control" id="exampleinput" name="noithat" placeholder="Nội thất">
                </div>
                <div class="form-group col-4">
                    <label for="exampleinput1">Phòng ngủ:</label>
                    <input type="text" class="form-control" id="exampleinput1" name="phongngu" placeholder="Phòng ngủ">
                </div>
                <div class="form-group col-4">
                    <label for="exampleinput2 requiredPassword1">Diện tích (m<sup>2</sup>):</label>
                    <input type="text" class="form-control" id="exampleinput2" name="dientich" placeholder="Diện tích">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="tinhthanh">Tỉnh/Thành phố<span class="text-danger">(*)</span>:</label>
                    <select id="tinhthanh" class="form-control" placeholder="Tỉnh/Thành phố" name="tinhthanhpho">
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
                    <label for="">Quận/Huyện<span class="text-danger">(*)</span>:</label>
                    <select id="quanhuyen" class="form-control" placeholder="Quận/Huyện" name="quanhuyen">
                        <option value="">--Chưa Chọn Tỉnh--</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="">Phường/Xã<span class="text-danger">(*)</span>:</label>
                    <select id="phuongxa" class="form-control" placeholder="Quận/Huyện" name="phuongxa">
                        <option value="">--Chưa chọn Quận/Huyện--</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Đăng bài</button>

        </form>
    </div>
</section>
<br><br><br><br>
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