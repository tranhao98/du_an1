<?php
session_start();
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
    $nguoidung = getAllNguoiDung();
    $row = getNguoiDungByID($id);
    $view = "views/nguoidung-edit.php";
    require_once "layout.php";
    break;
  case "insert":
    $idnguoidung = $_POST['idnguoidung'];

    $hinh = $_FILES['hinh']['name'];
    $target_file = "../upload/" . basename($hinh);
    move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);

    $hoten = $_POST["hoten"];
    $ngaysinh = $_POST["ngaysinh"];
    $email = $_POST["email"];
    $phuongxa = $_POST["phuongxa"];
    $quanhuyen = $_POST["quanhuyen"];
    $tinhthanh = $_POST["tinhthanh"];
    $gioitinh = $_POST["gioitinh"];
    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = $_POST["matkhau"];
    $sodienthoai = $_POST["sodienthoai"];
    $vaitro = $_POST["vaitro"];
    $anhien = $_POST["anhien"];
    $hoten = trim(strip_tags($hoten));
    $tendangnhap = trim(strip_tags($tendangnhap));
    $matkhau = trim(strip_tags($matkhau));
    settype ($idnguoidung, "int");
    addNewNguoiDung($idnguoidung, $hinh, $ngaysinh,  $gioitinh, $vaitro, $tendangnhap, $matkhau, $email, $sodienthoai, $tinhthanh, $quanhuyen, $phuongxa, $diachi, $anhien)
    header("location:index.php?ctrl=nguoidung");
    break;
  case "update":
    $id = $_POST["id"];

    $hinh = $_FILES['hinh']['name'];
    $target_file = "../upload/" . basename($hinh);
    move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);

    $hoten = $_POST["hoten"];
    $ngaysinh = $_POST["ngaysinh"];
    $email = $_POST["email"];
    $phuongxa = $_POST["phuongxa"];
    $quanhuyen = $_POST["quanhuyen"];
    $tinhthanh = $_POST["tinhthanh"];
    $gioitinh = $_POST["gioitinh"];
    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = $_POST["matkhau"];
    $sodienthoai = $_POST["sodienthoai"];
    $vaitro = $_POST["vaitro"];
    $anhien = $_POST["anhien"];
    settype($id, "int");
    settype($idnguoidung, "int");
    $id = trim(strip_tags($id));
    updateNguoiDung($id, $idnguoidung, $hinh, $ngaysinh,  $gioitinh, $vaitro, $tendangnhap, $matkhau, $email, $sodienthoai, $tinhthanh, $quanhuyen, $phuongxa, $diachi, $anhien)

    $message = "Cập nhật thành công!";
    header("location:index.php?ctrl=nguoidung");
    break;
  case "delete":
    $id = $_GET["id"];
    settype($id, "int");
    deleteNguoiDung($id);
    $message = 'Xóa Thành Công!';
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
