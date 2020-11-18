<?php
session_start();
require_once "models/model_thongbao.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_binhluan.php";
require_once "models/model_nguoidung.php";
$act = "index"; //chức năng mặc định
$message = "";
$nguoidung = getAllNguoiDung();
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
  case "index":
    $idtb = $_GET["idtb"];
    settype($idtb, "int");
    $ds = getAllBinhLuan($idtb);
    $dstb = getAllThongBao();
    $view = "views/binhluan-index.php";
    require_once "layout.php";
    break;

  case "edit":
    $idtb = $_GET['idtb'];
    $idbl = $_GET["idbl"];
    settype($idtb, "int");
    settype($idbl, "int");
    $row = getBinhLuanByID($idbl);
    $dstb = getAllThongBao();
    $ds = getAllBinhLuan($idtb);
    $view = "views/binhluan-edit.php";
    require_once "layout.php";
    break;
  case "insert":

    $idtb = $_POST['idtb'];
    $noidung = $_POST['noidung'];
    $idnguoibl = $_POST['idnguoibl'];
    $thoigianbinhluan = date("Y/m/d h:i:s");
    $anhien = $_POST['anhien'];

    settype($idtb, "int");
    settype($anhien, "int");

    $noidung = trim(strip_tags($noidung));

    addNewBinhLuan($noidung, $thoigianbinhluan, $idtb, $idnguoibl, $anhien);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã thêm thành công!
    </div>";
    $nguoidung = getAllNguoiDung();
    $dstb = getAllThongBao();
    $ds = getAllBinhLuan($idtb);
    $view = "views/binhluan-index.php";
    require_once "layout.php";
    break;
  case "update":
    $idbl = $_POST['idbl'];
    $idtb = $_POST['idtb'];
    $idnguoibl = $_POST['idnguoibl'];
    $noidung = $_POST['noidung'];
    $thoigianbinhluan = date("y/m/d h:i:s");
    $anhien = $_POST['anhien'];

    $noidung = trim(strip_tags($noidung));
    settype($idtb, "int");
    settype($anhien, "int");

    updateBinhLuan($idbl, $noidung, $thoigianbinhluan, $idtb, $idnguoibl, $anhien);

    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã cập nhật thành công!
    </div>";
    $dstb = getAllThongBao();
    $ds = getAllBinhLuan($idtb);
    $view = "views/binhluan-index.php";
    require_once "layout.php";
    break;
  case "delete":
    $idbl = $_GET['idbl'];
    $idtb = $_GET['idtb'];
    settype($idbl, "int");
    settype($idtb, "int");
    deleteBinhLuan($idbl);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Xóa thành công!
    </div>";
    $dstb = getAllThongBao();
    $ds = getAllBinhLuan($idtb);

    $view = "views/binhluan-index.php";
    require_once "layout.php";
    break;
}
