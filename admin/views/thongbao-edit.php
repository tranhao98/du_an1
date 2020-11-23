<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Sửa thông báo</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Thông báo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm thông báo</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <form enctype="multipart/form-data" class="mx-auto w-100" method="post" action="?ctrl=thongbao&act=update">
            <div class="row">
                <div class="form-group col-6">
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
                <div class="form-group col-6">
                    <?php
                    $hinh2 = "../upload/" . $row['hinh2'];
                    if (is_file($hinh2)) {
                        $hinh2 = "<img src='$hinh2' style='width:150px'>";
                    } else $hinh2 = "<img src = '../upload/noimg.jpg' style='width:150px'>";
                    ?>
                    <label for="exampleinput requiredPassword2">Hình ảnh2</label>
                    <input type="file" name="hinh2" class="form-control" id="exampleinput requiredPassword2">
                    <?= $hinh2 ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6 ">
                    <label for="tieude">Tiêu Đề</label>
                    <input type="text" class="form-control" value="<?= $row['tieude'] ?>" id="tieude" name="tieude" placeholder="Tiêu Đề">
                </div>
                <div class="form-group col-6 ">
                    <label for="tieude">Ngày Đăng</label>
                    <input type="date" class="form-control" value="<?= $row['ngaydang'] ?>" name="ngaydang">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6 ">
                    <label for="tieude">Thứ tự</label>
                    <input type="number" class="form-control" value="<?= $row['thutu'] ?>" name="thutu">
                </div>
                <!-- Người dùng -->
                <div class="form-group col-6">
                    <label for="tieude">Người Đăng</label>
                    <select class="form-control" id="idnguoidang" name="idnguoidang" placeholder="Người Đăng">
                        <?php
                        foreach ($nd as $nd) { ?>
                            <option value=" <?= $nd['id'] ?> " <?php if ($row["idnguoidang"] == $nd["id"]) {
                                                                    echo "selected";
                                                                } ?>> <?= $nd['hoten'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <!-- Nội dung -->
            <div class="form-group">
                <label for="tieude">Nội Dung</label>
                <textarea class="form-control" id="editor0" name="noidung" rows="5"> <?= $row['noidung'] ?> </textarea>
            </div>
            <!-- Ẩn hiện -->
            <div class="row">
                <div class="form-group col-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" <?php if ($row['anhien'] == 1) echo "checked"; ?> name="anhien" id="anhien1" value="1">
                        <label class="form-check-label" for="anhien1">Hiện</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" <?php if ($row['anhien'] == 0) echo "checked"; ?> name="anhien" id="anhien0" value="0">
                        <label class="form-check-label" for="anhien0">Ẩn</label>
                    </div>
                </div>
            </div>
            <input name="idtb" value="<?= $row['idtb'] ?>" type="hidden">
            <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
            <button type="submit" name="nutsave" class="btn btn-danger">Sửa</button>
        </form>
    </div>
</div>
<script>
    CKEDITOR.replace('editor0')
</script>