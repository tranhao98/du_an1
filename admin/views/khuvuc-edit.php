<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Sửa khu vực</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Quản lý khu vực</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sửa khu vực</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <h5></h5>
        <form enctype="multipart/form-data" class="mx-auto w-100" method="post" action="?ctrl=khuvuc&act=update">
            <div class="row">
                <!-- Nội dung -->
                <div class="form-group col-6 ">
                    <label for="tieude">Tên khu vực</label>
                    <input type="text" class="form-control" id="tenkhuvuc" name="tenkhuvuc" placeholder="Tên khu vực">
                </div>
                <!-- Người dùng -->
                <div class="form-group">
                    <label for="">Thứ Tự</label>
                    <input type="number" name="thutu" id="" class="form-control" placeholder="Thứ tự" aria-describedby="helpId">
                </div>
                    </select>
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
                        <input class="form-check-input" type="radio"  name="anhien" id="anhien0" value="0">
                        <label class="form-check-label" for="anhien0">Ẩn</label>
                    </div>
                </div>
            </div>
            <input name="idtb" value="<?=$row['idtb']?>" type="hidden">
            <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
            <button type="submit" class="btn btn-danger">Sửa</button>
        </form>
    </div>
</div>