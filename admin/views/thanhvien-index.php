<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Danh sách thành viên</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách thành viên</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <?php if (isset($message) && $message != "") {
            echo $message;
        } ?>
        <table class="w-100 mx-auto border table-tb-nd">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thành viên</th>
                    <th scope="col">Số tiền đã thanh toán</th>
                    <th scope="col">Nội dung thanh toán</th>
                    <th scope="col">Thời gian thanh toán</th>
                    <th scope="col">Thời gian hết hạn</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dem = 1;
                foreach ($dshoadon as $row) { ?>
                    <tr>
                        <th scope="row"><?= $dem++ ?></th>
                        <td class="text-left"><?= $row['tenthanhvien'] ?></td>
                        <td class="text-left"><?= number_format($row['money'] , 0, ',', '.') ?>đ</td>
                        <td><?= $row['note'] ?></td>
                        <td> <?= $row['time'] ?>
                        </td>
                        <td> <?= $row['timehethan'] ?>
                        </td>
                        <td><?php if(strtotime(date('Y-m-d h:i:s')) >= strtotime($row['timehethan'])) echo "<em class='text-danger'>Hết hạn</em>";
                        else echo "<em class='text-success'>Còn hạn</em>";
                        ?></td>
                        <td> <a onclick="return confirm('Bạn có muốn xóa thành viên không?')" href="index.php?ctrl=thanhvien&act=delete&idhoadon=<?= $row['id'] ?>"><i class="fa fa-trash text-danger" style="font-size:24px"></i></a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    