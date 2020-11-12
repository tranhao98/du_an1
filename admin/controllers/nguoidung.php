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
  case "insert":
    $view = "views/nguoidung-index.php";
    require_once "layout.php";
    break;
  case "update":
    $view = "views/nguoidung-index.php";
    require_once "layout.php";
    break;
  case "delete":
    $view = "views/nguoidung-index.php";
    require_once "layout.php";
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
