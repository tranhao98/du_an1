<?php
ob_start();
session_start();
include "models/model_nguoidung.php";
$warning = "";
if (isset($_POST['login']) && ($_POST['login'])) {
    $tendangnhap = trim(strip_tags($_POST['tendangnhap']));
    $matkhau = trim(strip_tags($_POST['matkhau']));

    $check = kiemTraNguoiDung($tendangnhap);
    // var_dump($check);
    if (is_array($check)) {
        // $hash = password_hash($matkhau,PASSWORD_DEFAULT);
        $verify = password_verify($matkhau, $check['matkhau']);
        
        if ($verify) {
            $_SESSION['hinh'] = $check['hinh'];
            $_SESSION['sid'] = $check['id'];
            $_SESSION['hoten'] = $check['hoten'];
            $_SESSION['vaitro'] = $check['vaitro'];
            $_SESSION['tendangnnhap'] = $check['tendangnhap'];
            if ($check['vaitro'] == 1) header("location: index.php");
        } else $warning = "<span style='color: red;'>Đăng nhập không thành công!</span>";
    } else
        $warning = "<span style='color: red;'>Tài khoản này không tồn tại!</span>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #47A1FA;">
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="container" style="padding-top: 8%; width:500px;">
        <h4 style="font-weight: normal;" class="text-white text-center mb-3">Hardwork Team Admin</h4>
        <div class="row">
            <div class="col-md-12 bg-white p-4 shadow-sm rounded">
                <h5 class="text-center mb-5">Đăng Nhập Quản Trị Viên</h5>
                <form action="dangnhap.php" method="post" class="w-100">
                    <div class="form-group">
                        <label for="exampleInputEmail1">TÊN ĐĂNG NHẬP</label>
                        <input type="text" name="tendangnhap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên đăng nhập">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">MẬT KHẨU</label>
                        <input type="password" name="matkhau" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                    </div>
                    <div class="row pl-3">
                        <div class="col-6 text-left form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Nhớ tài khoản</label>
                        </div>
                    </div><br>
                    <input type="submit" name="login" value="ĐĂNG NHẬP" class="btn btn-primary w-100 p-2">
                    <?php
                    if (isset($warning) && ($warning != "")) echo $warning;
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/custom.js"> </script>
</body>

</html>