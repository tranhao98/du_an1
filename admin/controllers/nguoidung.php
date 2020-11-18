<?php

require_once "models/model_nguoidung.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_khuvuc.php";
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
    $phuongxa = $_POST["phuongxa"];
    $quanhuyen = $_POST["quanhuyen"];
    $tinhthanh = $_POST["tinhthanh"];
    $gioitinh = $_POST["gioitinh"];
    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = $_POST["matkhau"];
    $sodienthoai = $_POST["sodienthoai"];
    $diachi = $_POST["diachi"];
    if (isset($_POST['vaitro']) == true) $vaitro = 1;
    else $vaitro = 0;
    $anhien = $_POST["anhien"];
    $hoten = trim(strip_tags($hoten));
    $tendangnhap = trim(strip_tags($tendangnhap));
    $matkhau = trim(strip_tags($matkhau));
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
    $phuongxa = $_POST["phuongxa"];
    $quanhuyen = $_POST["quanhuyen"];
    $tinhthanh = $_POST["tinhthanh"];
    $gioitinh = $_POST["gioitinh"];
    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = $_POST["matkhau"];
    $sodienthoai = $_POST["sodienthoai"];
    $diachi = $_POST["diachi"];
    if (isset($_POST['vaitro']) == true) $vaitro = 1;
    else $vaitro = 0;
    $anhien = $_POST["anhien"];
    settype($id, "int");
    $hoten = trim(strip_tags($hoten));
    updateNguoiDung($id, $hoten, $ngaysinh, $hinh, $tendangnhap, $email, $matkhau, $sodienthoai, $diachi, $tinhthanh, $quanhuyen, $phuongxa, $gioitinh, $vaitro, $anhien);

    $dstinhthanh = getAllTinhThanh();
    $dsquanhuyen = getAllQuanHuyenTheoTinhThanh();
    $dsphuongxa = getAllPhuongXa();
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
        header("location: dangnhap.php");
      }
    }
    break;
}
