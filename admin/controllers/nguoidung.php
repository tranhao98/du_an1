<?php

require_once "models/model_nguoidung.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_khuvuc.php";
require_once "models/model_donvihanhchinh.php";
$act = "index"; //chức năng mặc định
$message = "";
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
  case "index":
    $dsnd = getAllNguoiDung();
    $view = "views/nguoidung-index.php";
    require_once "layout.php";
    break;
  case "addnew":
    $dstinhthanh = getAllTinhThanh();
    $dsquanhuyen = getAllQuanHuyenTheoTinhThanh();
    $dsphuongxa = getAllPhuongXa();
    $view = "views/nguoidung-addnew.php";
    require_once "layout.php";
    break;
  case "edit";
    $id = $_GET["id"];
    settype($id, "int");
    $row = getNguoiDungByID1($id);
    $dstinhthanh = getAllTinhThanh();
    $dsquanhuyen = getAllQuanHuyenTheoTinhThanh();
    $dsphuongxa = getAllPhuongXa();
    $view = "views/nguoidung-edit.php";
    require_once "layout.php";
    break;
  case "insert":

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
    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = password_hash($_POST["matkhau"], PASSWORD_DEFAULT);
    $sodienthoai = $_POST["sodienthoai"];
    $diachi = $_POST["diachi"];
    if (isset($_POST['vaitro']) == true) $vaitro = 1;
    else $vaitro = 0;
    $anhien = $_POST["anhien"];
    $hoten = trim(strip_tags($hoten));
    $sodienthoai = trim(strip_tags($sodienthoai));
    $tendangnhap = trim(strip_tags($tendangnhap));
    $matkhau = trim(strip_tags($matkhau));
    $diachi = trim(strip_tags($diachi));
    addNewNguoiDung($hoten, $ngaysinh, $hinh, $tendangnhap, $email, $matkhau, $sodienthoai, $diachi, $tinhthanh, $quanhuyen, $phuongxa, $gioitinh, $vaitro, $anhien);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã thêm thành công!
    </div>";
    header("location:index.php?ctrl=nguoidung");
    break;
  case "update":
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
    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = password_hash($_POST["matkhau"], PASSWORD_DEFAULT);
    $sodienthoai = $_POST["sodienthoai"];
    $diachi = $_POST["diachi"];
    if (isset($_POST['vaitro']) == true) $vaitro = 1;
    else $vaitro = 0;
    $anhien = $_POST["anhien"];
    settype($id, "int");
    $sodienthoai = trim(strip_tags($sodienthoai));
    $tendangnhap = trim(strip_tags($tendangnhap));
    $matkhau = trim(strip_tags($matkhau));
    $hoten = trim(strip_tags($hoten));
    $diachi = trim(strip_tags($diachi));

    updateNguoiDung($id, $hoten, $ngaysinh, $hinh, $tendangnhap, $email, $matkhau, $sodienthoai, $diachi, $tinhthanh, $quanhuyen, $phuongxa, $gioitinh, $vaitro, $anhien);


    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã cập nhật thành công!
    </div>";
    header("location:index.php?ctrl=nguoidung");
    break;
  case "delete":
    $id = $_GET["id"];
    settype($id, "int");
    deleteNguoiDung($id);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã xóa thành công!
    </div>";
    header("location:index.php?ctrl=nguoidung");
    break;
  case 'dangxuat':
    if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {
      if (isset($_GET['logout']) && ($_GET['logout'] == 1)) {
        unset($_SESSION['sid']);
        unset($_SESSION['tendangnhap']);
        unset($_SESSION['hoten']);
        unset($_SESSION['hinh']);
        unset($_SESSION['vaitro']);
        header("location: dangnhap.php");
      }
    }
    break;
}
