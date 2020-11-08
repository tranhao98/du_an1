
<div class="boxleft container">
    <h1 class="h5 py-2 border-bottom text-danger"> THÊM THÔNG BÁO</h1>
    <form class="mx-auto border p-3 mt-4" method="post" action="?ctrl=thongbao&act=insert">
        <div class="row ">
            <div class="form-group col-6 ">
                <label for="tieude">Tiêu Đề</label>
                <input type="text" class="form-control"  id="tieude" name="tieude" placeholder="Tiêu Đề">
            </div>
            <div class="form-group col-6 ">    
            <label for="tieude">Ngày Đăng</label>
                <input type="date" class="form-control"  name="Ngày Đăng">
            </div>
            
        <!-- Người dùng -->
            <div class="form-group col-6 ">   
                <label for="tieude">Người Đăng</label>
                <select class="form-control" name="ma_loai" placeholder="Người Dùng">
                    <option value="">Người Dùng</option>
                    <?php
                        foreach($nguoidung as $nd) { ?>
                    <option value=" <?=$nd['idnguoidung']?> "> <?=$nd['tennguoidung']?> </option>
                    <?php } ?>                
                </select>
            </div>
        <!-- Nội dung -->
            <div class="form-group col-6 ">
                <label for="tieude">Nội Dung</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" id="noidung"  name="noidung" placeholder="... ... ..." rows="3"></textarea>
            </div>
        </div>
        <!-- Ẩn hiện -->
        <div class="row">
            <div class="form-group col-6 ">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="anhien" id="anhien1" value="1">
                    <label class="form-check-label" for="anhien0">Hiện</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="anhien" id="anhien0" value="0">
                    <label class="form-check-label" for="anhien0">Ẩn</label>
                </div>
            </div>
        </div>
    <button type="submit" name="nutsave" class="btn btn-warning">Lưu Thông Báo</button>
    <button type="submit" name="reset" class="btn btn-dark">Reset</button>
    </form>
</div>