<?php
ob_start();
session_start();
require_once "../system/config.php";
require_once "models/home.php"; //nạp model để có các hàm tương tác db1

$dsdm1 = getAllDanhMuc1();
$dsdm2 = getAllDanhMuc2();
$dsbd = getAllBaiDang();
$dskv = getAllKhuVuc();
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
    case "login":
        $tendangnhap = trim(strip_tags($_POST['tendangnhap']));
        $matkhau = trim(strip_tags($_POST['matkhau']));
        $check = kiemTraNguoiDung($tendangnhap);
        // var_dump($check);
        $warning = "";
        if (is_array($check)) {
            // $hash = password_hash($matkhau,PASSWORD_DEFAULT);
            $verify = password_verify($matkhau, $check['matkhau']);
            // var_dump($hash);
            if ($verify) {
                $_SESSION['hinh'] = $check['hinh'];
                $_SESSION['sid'] = $check['id'];
                $_SESSION['hoten'] = $check['hoten'];
                $_SESSION['tendangnnhap'] = $check['tendangnhap'];
                if ($check['vaitro'] == 1) header("location: ../admin/index.php");
                else header("location: index.php");
            } else $warning = "<span style='color: red;'>Đăng nhập không thành công!</span>";
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
        if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {
            $id = $_SESSION['sid'];
            $row = getNguoiDungByID($id);
        }
        $child = "views/thongtin-index.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
    case "myarticle":
        $id = 0;
        if (isset($_GET['id']) == true) $id = $_GET['id'];

        $page_num = 1;
        if (isset($_GET['page_num']) == true) $page_num = $_GET['page_num'];

        settype($id, "int");
        settype($page_num, "int");
        if ($page_num <= 0) $page_num = 1;

        $page_size = PAGE_SIZE;
        $dsnguoidung = getBaiDangTheoND($id, $page_num, $page_size);
        $total_rows = demBaiDangTheoND($id);
        $baseurl = SITE_URL . "/index.php?ctrl=user&act=myarticle&id={$id}";
        $links = taolinks($baseurl, $page_num, $page_size, $total_rows);
        $child = "views/myarticle.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
    case "doimatkhau":
        $child = "views/doimatkhau.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
    case "thanhtoan":
        $child = "views/thanhtoan.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
}
