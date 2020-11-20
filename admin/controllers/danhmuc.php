<?php
require_once "models/model_danhmuc.php"; //nạp model để có các hàm tương tác db 
$act = "index"; //chức năng mặc định
$message = "";

if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {

  case "index":
    $dsdm = getAllDanhMuc();
    $view = "views/danhmuc-index.php";
    require_once "layout.php";
    break;

  case "insert":
    $tendm = $_POST["tendm"];
    $thutu = $_POST["thutu"];
    $anhien = $_POST["anhien"];
    $loai = $_POST['loai'];
    addDanhMuc($tendm, $loai, $thutu, $anhien);
    $dsdm = getAllDanhMuc();
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã thêm thành công!
    </div>";
    $view = "views/danhmuc-index.php";
    require_once "layout.php";
    break;

  case "edit":
    $iddm = $_GET["iddm"];
    settype($iddm, "int");
    //$row = getAllDanhmuc();
    $row = getDanhMucByID($iddm);
    $dsdm = getAllDanhMuc();
    $view = "views/danhmuc-index.php";
    require_once "layout.php";
    break;
  case "update":
    $iddm = $_POST["iddm"];
    $tendm = $_POST["tendm"];
    $loai = $_POST['loai'];
    $thutu = $_POST["thutu"];
    $anhien = $_POST["anhien"];
    settype($iddm, "int");
    settype($thutu, "int");
    $iddm = trim(strip_tags($iddm));
    $tendm = trim(strip_tags($tendm));
    updateDanhMuc($iddm, $tendm, $loai, $thutu, $anhien);

    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã cập nhật thành công!
    </div>";
    $view = "views/danhmuc-index.php";
    require_once "layout.php";
    break;
  case "delete":
    $iddm = $_GET["iddm"];
    settype($iddm, "int");
    deleteDanhmuc($iddm);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã xóa thành công!
    </div>";
    header("location:index.php?ctrl=danhmuc");
    break;
}
