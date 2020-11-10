<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Thêm người dùng</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item">Tổng quan</li>
                    <li class="breadcrumb-item">Quản lý người dùng</li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm người dùng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Thêm người dùng</h5>
            <form enctype="multipart/form-data"  method="post" action="?ctrl=nguoidung&act=addnew">
                <div class="form-group">                       
                    <label for="">ID Người Dùng </label>
                    <input type="text" name="name" id="id" class="form-control" placeholder="" aria-describedby="helpId">
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
                <div class="row">
                <div class="form-group col-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="anhien" id="anhien1" value="1">
                        <label class="form-check-label" for="anhien0">Hiện</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="anhien" id="anhien0" value="0">
                        <label class="form-check-label" for="anhien0">Ẩn</label>
                    </div>
                </div>
                </div>
                <input name="idtb" value="<?=$row['idtb']?>" type="hidden">
                <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
                <button type="submit" class="btn btn-danger">Thêm</button>
            </form>
    </div>
</div>
