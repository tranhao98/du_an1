<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-5 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Thêm thông tin bài đăng</h5>
        </div>
        <div class="col-7 h-100 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item">Tổng quan</li>
                    <li class="breadcrumb-item">Quản lý bài đăng</li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm thông tin bài đăng</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5 class="font-weight-bold mb-3">Thêm bài đăng</h5>
        <form enctype="multipart/form-data" class="mx-auto w-100" method="post" action="?ctrl=nguoidung&act=addnew">
            <div class="row">
                <div class="form-group col-6">
                    <label for="">Tên Người Dùng</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group col-6">
                    <label for="">Ngày Sinh</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="">Tên Đăng Nhập</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group col-4">
                    <label for="">Mật Khẩu</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group col-4">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
            </div>
        </form>
    </div>
</div>