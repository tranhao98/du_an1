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
            <div class="row">
                <div class="form-group col-12">
                    <label for="name">Tiêu đề bài viết:</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group col-12">
                    <label for="exampleinput requiredPassword1">Hình ảnh:</label>
                    <input required type="file" name="hinh" class="form-control" id="exampleinput requiredPassword1">
                </div>
                <div class="form-group col-12">
                    <label for="exampleFormControlTextarea1">Mô tả:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" style="resize: none"></textarea>
                </div>
                <div class="form-group col-12">
                    <select class="custom-select col-12">
                        <option selected>Chọn khu vực</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group col-12">
                    <select class="custom-select col-12">
                        <option selected>Chọn danh mục</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>