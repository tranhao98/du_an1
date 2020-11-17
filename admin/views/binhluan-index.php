<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded">
        <div class="col-6 text-left h-100 p-3 mt-n1">
            <h5 class="font-weight-bold">Danh sách bình luận</h5>
        </div>
        <div class="col-6 h-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5 bg-white">
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Tổng quan</a></li>
                    <li class="breadcrumb-item "><a class="text-dark" href="#">Thông báo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách bình luận</li>
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
                    <th scope="col">Người bình luận</th>
                    <th scope="col">Nội dung bình luận</th>
                    <th scope="col">Thời gian bình luận</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dem = 1;
                foreach ($ds as $row) { ?>
                    <tr>
                        <th scope="row"><?= $dem++ ?></th>
                        <td class="text-left"><?php echo getNameNguoiDung($row['idnguoibl'])['hoten']; ?></td>
                        <td class="text-left"><?= $row['noidung'] ?></td>
                        <td><?= $row['thoigianbinhluan'] ?></td>
                        <td> <span class="text-success font-weight-bold"> <?php if ($row['anhien'] == 1) echo "Hiện"; ?></span>
                            <span class="text-danger font-weight-bold"> <?php if ($row['anhien'] == 0) echo "Ẩn"; ?></span>
                        </td>

                        <td> <a href="index.php?ctrl=binhluan&act=edit&$idtb=<?= $row['idtb'] ?>&idbl=<?= $row['idbl'] ?>" data-toggle="modal" data-target="#staticBackdrop1"><i class='fas fa-edit' style="font-size:24px"></i></a> </td>
                        <td> <a onclick="return confirm('Bạn có muốn xóa bình luận không?')" href="index.php?ctrl=binhluan&act=delete&idtb=<?= $row['idtb'] ?>&idbl=<?= $row['idbl'] ?>"><i class="fa fa-trash text-danger" style="font-size:24px"></i></a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php require_once "views/binhluan-addnew.php" ?>
        <?php require_once "views/binhluan-edit.php" ?>
    </div>
    