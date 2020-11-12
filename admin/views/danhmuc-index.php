<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded ">
        <div class="col-8 text-left h-100 p-0 p-3 mt-n1">
            <h5 class="font-weight-bold">Quản lý danh mục</h5>
        </div>
        <div class="col-4 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lý danh mục</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="box-add-dm shadow-sm bg-white rounded p-3">
            <h5 class="mb-4 font-weight-bold">Thêm Danh Mục </h5>
            <form method="post" action="?ctrl=danhmuc&act=insert" class="bg-input">
                <div class="form-group">
                    <label for="">Tên Danh Mục</label>
                    <input type="text" name="tendm" id="" class="form-control" placeholder="Tên danh mục" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Thứ Tự</label>
                    <input type="text" name="thutu" id="" class="form-control" placeholder="Thứ tự" aria-describedby="helpId">
                </div>
                <div class="row">
                    <div class="form-group col-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anhien" id="anhien1" value="1">
                            <label class="form-check-label" for="anhien1">Hiện</label>
                        </div>
                    </div>
                    <div class="form-group col-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anhien" id="anhien0" value="0">
                            <label class="form-check-label" for="anhien0">Ẩn</label>
                        </div>
                    </div>
                </div>
                <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
                <button type="submit" class="btn btn-danger">Thêm</button>
            </form>
        </div>
        <div class="box-list-dm p-3 shadow-sm bg-white rounded">
            <h5 class="mb-5 font-weight-bold text-uppercase">Danh sách danh mục </h5>
            <table class="table-dm-kv" style="text-align:center; width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Danh Mục</th>
                        <th scope="col">Thứ Tự</th>
                        <th scope="col">Ẩn Hiện</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dem = 1;
                    ?>
                    <?php foreach ($dsdm as $row) { ?>
                    <tr>
                        <td scope="col"><?= $dem++ ?></td>
                        <td><?= $row['tendm'] ?></td>
                        <td><?= $row['thutu'] ?></td>
                        <td> <?= ($row['anhien'] == 1) ? 'Ẩn' : 'Hiện'; ?></td>
                        <td class="align-middle"> <a href="index.php?ctrl=danhmuc&act=edit&iddm="><i class='far fa-edit' style='font-size:18px'></i></a> </td>
                        <td class="align-middle"> <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?ctrl=danhmuc&act=delete&iddm=<?= $row['iddm'] ?>"><i class="fa fa-trash text-danger" style="font-size:18px"></i></a> </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>