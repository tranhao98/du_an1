<?php
ob_start();
session_start();
require_once "../system/config.php";
require_once "models/home.php"; //nạp model để có các hàm tương tác db1
require_once "models/model_donvihanhchinh.php"; //nạp model để có các hàm tương tác db1

$dsdm1 = getAllDanhMuc1();
$dsdm2 = getAllDanhMuc2();
$dsbd = getAllBaiDang();
$dskv = getAllKhuVuc();
$dskvspecial = getKhuVucSpecial();
$dstbnew = getThongBaoNew();
$dstball = getThongBaoAll();
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
    case "login-index":
        $view = "views/login-index.php";
        require_once "layout.php";
    break;
    case "login":
        $tendangnhap = trim(strip_tags($_POST['tendangnhap']));
        $matkhau = trim(strip_tags($_POST['matkhau']));
        $check = kiemTraNguoiDung($tendangnhap);
        // var_dump($check);
        $warning = "";
        if (is_array($check)) {
            // $hash = password_hash($matkhau,PASSWORD_DEFAULT);
            $verify = password_verify($matkhau, $check['matkhau']);
            $checkgoi = kiemTraGoi($check['id']);    
            // var_dump($hash);
            if ($verify) {
                $_SESSION['hinh'] = $check['hinh'];
                $_SESSION['sid'] = $check['id'];
                $_SESSION['hoten'] = $check['hoten'];
                $_SESSION['vaitro'] = $check['vaitro'];
                $_SESSION['goitv'] = $checkgoi['thanh_vien'];
                if ($check['vaitro'] == 1) header("location: ../admin/index.php");
                else header("location: index.php");
            } else {
                $warning = "<span style='color: red;'>Đăng nhập không thành công!</span>";
                $_SESSION['mess'] = $warning;
                header("location: ?ctrl=user&act=login-index");
            }
        
        } else {
            $warning = "<span style='color: red;'>Tài khoản này không tồn tại!</span>";
            $_SESSION['mess'] = $warning;
            header("location: ?ctrl=user&act=login-index");
        }

        break;
    case "logout":
        if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {
            unset($_SESSION['sid']);
            unset($_SESSION['tendangnhap']);
            unset($_SESSION['hoten']);
            unset($_SESSION['hinh']);
            unset($_SESSION['goitv']);
            unset($_SESSION['vaitro']);
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

        $page_size = 4;
        $dsnguoidung = getBaiDangTheoND($id, $page_num, $page_size);
        $total_rows = demBaiDangTheoND($id);
        $baseurl = SITE_URL . "/index.php?ctrl=user&act=myarticle&id={$id}";
        $links = taolinks($baseurl, $page_num, $page_size, $total_rows);
        $child = "views/myarticle.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
    case "edit-info":
        if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {
            $id = $_SESSION['sid'];
            $row = getNguoiDungByID($id);
        }
        $child = "views/thongtin-edit.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
    break;
    case "update-info":
        $id = $_POST["id"];
        $hinh = $_FILES['hinh']['name'];
        $target_file = "../upload/" . basename($hinh);
        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);

        $hoten = $_POST["tennguoidung"];
        $ngaysinh = $_POST["ngaysinh"];
        $email = $_POST["email"];
        $tinhthanh = getNameKhuVucHanhChinh($_POST['tinhthanh'], 1)['name'];
        $quanhuyen = getNameKhuVucHanhChinh($_POST['quanhuyen'], 2)['name'];
        $phuongxa = getNameKhuVucHanhChinh($_POST['phuongxa'], 3)['name'];
        $gioitinh = $_POST["gioitinh"];
        $sodienthoai = $_POST["sodienthoai"];
        $diachi = $_POST["diachi"];
        $anhien = $_POST["anhien"];
        settype($id, "int");
        $sodienthoai = trim(strip_tags($sodienthoai));
        $tendangnhap = trim(strip_tags($tendangnhap));
        $hoten = trim(strip_tags($hoten));
        $diachi = trim(strip_tags($diachi));

    updateNguoiDung($id, $hoten, $ngaysinh, $hinh, $email, $sodienthoai, $diachi, $tinhthanh, $quanhuyen, $phuongxa, $gioitinh, $anhien);
    header("location:index.php?ctrl=user&act=infouser");
    break;
    case "thanhtoan":
        $child = "views/thanhtoan.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
    case "doimatkhau":
        if(isset($_POST['submit'])){
            $passcu = ($_POST["passcu"]);
            $p1 = password_hash($_POST['p1'],PASSWORD_DEFAULT);
            $p2 = password_hash($_POST['p2'],PASSWORD_DEFAULT);
            $check = kiemTraMatKhau($_SESSION['sid']);
            if(is_array($check)){
                $verify = password_verify($passcu, $check['matkhau']);
                if($verify){
                    changePass($p1,$_SESSION['sid']);
                    $mess = '<div class="alert alert-primary" role="alert">
                    Bạn đã đổi mật khẩu thành công. Bạn vui lòng đăng nhập lại.
                </div>';
                    $_SESSION['mess'] = $mess;
                    unset($_SESSION['sid']);
                    unset($_SESSION['tendangnhap']);
                    unset($_SESSION['hoten']);
                    unset($_SESSION['hinh']);
                    unset($_SESSION['goitv']);
                    unset($_SESSION['vaitro']);
                    header('location: ?ctrl=user&act=login-index');
                } else {
                    $mess = '<div class="alert alert-primary" role="alert">
                    Mật khẩu không trùng khớp.
                </div>';
                }
            }
        
    }
        $child = "views/doimatkhau.php";
        $view = "views/thongtintaikhoan.php";
        
        require_once "layout.php";
        break;
    case "register":
        
        $view = "views/register.php";
        require_once "layout.php";
        break;
    break;
    case "kiemtra":
        $checkgoi = kiemTraGoi($check['id']);    
        $_SESSION['goitv'] = $checkgoi['thanh_vien'];
        header("location: ?ctrl=user&act=thanhtoan");
    break;
    }
