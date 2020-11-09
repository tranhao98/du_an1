<div class="container">
    <div class="row shadow-sm mb-3 p-3 bg-white rounded">
        <div class="col-8 text-left align-self-center p-0">
            <h4>Quản lý danh mục</h4>
        </div>
        <div class="col-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lý danh mục</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="box-add-dm shadow-sm bg-white rounded p-3">
            <h5 class="mb-3 font-weight-bold">Thêm Danh mục </h5>
            <form method="post" action="?ctrl=danhmuc&act=insert">
                <div class="form-group">
                    <label for="">Tên Danh Mục</label>
                    <input type="text" name="tendm" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Thứ Tự</label>
                    <input type="text" name="thutu" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
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
                <div class="form-group">
                    <input type="submit" name="themdm" id="" class="form-control btn btn-primary" value="Submit" aria-describedby="helpId">
                </div>
            </form>
        </div>
        <div class="box-list-dm p-3 shadow-sm bg-white rounded">
            <h5 class="mb-3 font-weight-bold">Danh sách danh mục </h5>
            <table style="text-align:center; width:100%">
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
                    <tr>
                        <td scope="col"><?= $dem++ ?></td>
                        <td><?= $row['tendm'] ?></td>
                        <td><?= $row['thutu'] ?></td>
                        <td> <?= ($row['anhien'] == 1) ? 'Ẩn' : 'Hiện'; ?></td>
                        <td class="align-middle"> <a href="index.php?ctrl=xe&act=edit&id=<?= $row['id'] ?>" class="btn-info btn"><i class='fas fa-pencil-alt' style='font-size:24px'></i></a> </td>
                        <td class="align-middle"> <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?ctrl=xe&act=delete&id=<?= $row['id'] ?>" class="btn-info btn"><i class="fa fa-trash" style="font-size:24px"></i></a> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>