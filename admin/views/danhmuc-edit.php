<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-7 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Sửa danh mục</h5>
        </div>
        <div class="col-5 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Quản lý danh mục</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sửa danh mục</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5></h5>
        <form enctype="multipart/form-data" class="mx-auto w-100" method="post" action="?ctrl=danhmuc&act=update">
            <div class="row">
                <!-- Tên -->
                <div class="form-group col-6 ">
                    <label for="tendm">Tên danh mục</label>
                    <input type="text" class="form-control" value="<?= $row['tendm'] ?>" name="tendm">
                </div>
                <div class="form-group col-6 ">
                    <label for="tieude">Thứ tự</label>
                    <input type="number" class="form-control" value="<?= $row['thutu'] ?>" name="thutu">
                </div>
                <!-- Ẩn hiện -->
                <div class="row pl-3">
                    <div class="form-group col-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" <?php if ($row['anhien'] == 1) echo "checked"; ?> name="anhien" id="anhien1" value="1">
                            <label class="form-check-label" for="anhien1">Hiện</label>
                        </div>
                    </div>
                    <div class="form-group col-6 ">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" <?php if ($row['anhien'] == 0) echo "checked"; ?> name="anhien" id="anhien0" value="0">
                            <label class="form-check-label" for="anhien0">Ẩn</label>
                        </div>
                    </div>
                </div>
            </div>
            <input name="iddm" value="<?= $row['iddm'] ?>" type="hidden">
            <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
            <button type="submit" name="nutsave" class="btn btn-danger">Sửa</button>
        </form>
    </div>
</div>