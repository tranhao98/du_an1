<?php
ob_start();
session_start();
require_once "../system/config.php";
require_once "models/home.php"; //nạp model để có các hàm tương tác db
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
    case "login":
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = md5($_POST['matkhau']);
        $check = kiemTraNguoiDung($tendangnhap, $matkhau);
        // var_dump($check);
        if (is_array($check)) {
            $_SESSION['hinh'] = $check['hinh'];
            $_SESSION['sid'] = $check['id'];
            $_SESSION['hoten'] = $check['hoten'];
            $_SESSION['tendangnnhap'] = $check['tendangnhap'];
            if ($check['vaitro'] == 1) header("location: index.php");
        } else {
            $warning = "<span style='color: red;'>Tài khoản này không tồn tại!</span>";
        }
    break;
    case "logout":
        if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {
            unset($_SESSION['sid']);
            unset($_SESSION['tendangnhap']);
            unset($_SESSION['hoten']);
            unset($_SESSION['hinh']);
            header("location: index.php");
        }
    break;
    case "infouser":
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
    break;
}
?>
