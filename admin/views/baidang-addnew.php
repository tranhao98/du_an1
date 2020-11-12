<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-5 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Thêm thông tin bài đăng</h5>
        </div>
        <div class="col-7 h-100 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item"><a href="" class="text-dark">Tổng quan</a></li>
                    <li class="breadcrumb-item"><a href="" class="text-dark">Quản lý bài đăng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm thông tin bài đăng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Thêm bài đăng</h5>
        <form action="" method="POST" class="mx-auto w-100">
            <div class="row col-12">
                <div class="form-group col-12">
                    <label for="name">Tiêu đề bài viết:</label>
                    <input required type="text" class="form-control" id="name">
                </div>
                <div class="form-group col-12">
                    <label for="exampleinput requiredPassword1">Hình ảnh:</label>
                    <input required type="file" name="hinh" class="form-control" id="exampleinput requiredPassword1">
                </div>
                <div class="form-group col-12">
                    <label for="exampleFormControlTextarea1">Mô tả:</label>
                    <textarea required class="form-control" id="exampleFormControlTextarea1" rows="15" style="resize: none"></textarea>
                </div>
                <div class="form-group col-12">
                    <select class="custom-select col-12" required>
                        <option selected>Chọn khu vực</option>
                        <?php
                            foreach($dskv as $kv) {
                        ?>
                        <option value="<?=$kv['idkhuvuc']?>"><?=$kv['tenkhuvuc']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group col-12">
                    <select class="custom-select col-12" required>
                        <option selected>Chọn danh mục</option>
                        <?php
                            foreach($dsdm as $dm) {
                        ?>
                        <option value="<?=$dm['iddm']?>"><?=$dm['tendm']?></option>
                        <?php }?>
                    </select>
                </div>
                </div>
                <div class="row col-12">
                    <div class="form-group col-4">
                        <label for="exampleinput">Nội thất:</label>
                        <input required type="text" class="form-control" id="exampleinput">
                    </div>
                    <div class="form-group col-4">
                        <label for="exampleinput">Phòng ngủ:</label>
                        <input required type="text" class="form-control" id="exampleinput">
                    </div>
                    <div class="form-group col-4">
                        <label for="exampleinput requiredPassword1">Diện tích:</label>
                        <input required type="text" class="form-control" id="exampleinput">
                    </div>
                </div>
                <div class="row col-12">
                    <div class="form-group col-4">
                        <label for="">Tỉnh / Thành phố:</label>
                        <select id="tinhthanh" class="form-control" name="tinhthanh" placeholder="Tỉnh/Thành phố" required>
                            <option value="" selected>--Chọn Tỉnh / Thành phố--</option>
                            <?php
                                foreach($tinh as $tinh) {
                            ?>
                            <option value="<?=$tinh['matp']?>"><?=$tinh['name']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label for="">Quận / Huyện:</label>
                        <select id="quanhuyen" class="form-control" name="quanhuyen" placeholder="Quận/Huyện" required>  
                            <option value="" selected>--Chọn Quận / Huyện--</option>
                            <?php
                                foreach($huyen as $huyen) {
                            ?>
                            <option value="<?=$huyen['maqh']?>"><?=$huyen['name']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label for="">Phường / Xã:</label>
                        <select id="phuongxa" class="form-control" name="quanhuyen" placeholder="Quận/Huyện" required>
                            <option value="" selected>--Chọn Phường / Xã--</option>
                            <?php
                                foreach($xa as $xa) {
                            ?>
                            <option value="<?=$xa['xaid']?>"><?=$xa['name']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="row col-12">
                    <div class="form-group col-12">
                        <label for="exampleFormControlTextarea1">Địa chỉ:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize: none" required></textarea>
                    </div>
                </div>
                <div class="row col-12">
                    <div class="form-group col-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anhien" id="anhien1" value="1">
                            <label class="form-check-label" for="anhien1">Hiện</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="anhien" id="anhien0" value="0">
                            <label class="form-check-label" for="anhien0">Ẩn</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Nổi bật</label>
                        </div>
                    </div>   
                </div>
                <div class="row col-12">
                    <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
                    <button type="submit" class="btn btn-danger">Sửa</button>
                </div>    
            </div>     
        </form>
    </div>
</div>


