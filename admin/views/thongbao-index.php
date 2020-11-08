


<div class="boxright col-12">
    <h1 class="h5 py-2 border-bottom text-danger"> DANH SÁCH THÔNG BÁO</h1>
    <table class="table table-bordered  mx-auto border p-2 shadow rounded mt-4">
        <thead>
            <tr>
            <th scope="col">Thứ Tự</th>
            <th scope="col">Tiêu Đề</th>
            <th scope="col">Ngày Đăng</th>
            <th scope="col">Nội Dung</th>
            <th scope="col">Ẩn Hiện</th>
            <th scope="col">Sửa & Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dstb as $row) { ?>
            <tr>
            <td>
                <?=$row['thutu']?>
            </td>
            <td>
                <?=$row['tieude']?>
            </td>
            <td>
                <?=$row['ngaydang']?>
            </td>
            <td>
                <?=$row['noidung']?>
            </td>
            <td>
                <?=($row['anhien']==1)? '<i style="font-size:20px" class="fa">&#xf046;</i>':'<i style="font-size:20px" class="fa">&#xf096;</i>'; ?>
            </td>
            <td>
                <a class="iconedit" href="?ctrl=thongbao&act=edit&idtb=<?= $row['idtb']?>"><i style='font-size:20px' class='far'>&#xf044;</i></a>

                <a class="icondelete" href="?ctrl=thongbao&act=delete&idtb=<?= $row['idtb']?>"><i style='font-size:20px' class='far'>&#xf2ed;</i></a>
            </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>