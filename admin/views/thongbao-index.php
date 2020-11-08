<div class="boxright col-12">
    <h1 class="h5 py-2 border-bottom text-danger"> DANH SÁCH THÔNG BÁO</h1>
    <table class="table table-bordered mx-auto border p-2 shadow rounded mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tiêu Đề</th>
                <th scope="col">Ngày Đăng</th>
                <th scope="col">Nội Dung</th>
                <th scope="col">Ẩn Hiện</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dem = 1;?>
                <tr>
                    <th scope="col"><?= $dem++ ?></th>
                    <td>
                        <?= $row['tieude'] ?>
                    </td>
                    <td>
                        <?= $row['ngaydang'] ?>
                    </td>
                    <td>
                        <?= $row['noidung'] ?>
                    </td>
                    <td>
                        <?= ($row['anhien'] == 1) ? '<i style="font-size:20px" class="fa">&#xf046;</i>' : '<i style="font-size:20px" class="fa">&#xf096;</i>'; ?>
                    </td>
                    <td class="align-middle"> <a href="index.php?ctrl=xe&act=edit&id=<?= $row['id'] ?>" class="btn-primary btn"><i class="fa fa-pencil" style="font-size:24px"></i></a> </td>
                    <td class="align-middle"> <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?ctrl=xe&act=delete&id=<?= $row['id'] ?>" class="btn-primary btn"><i class="fa fa-trash" style="font-size:24px"></i></a> </td>
                </tr>
        </tbody>
    </table>
</div>