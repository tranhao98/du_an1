<?php
require_once "models/model_khuvuc.php"; //nạp model để có các hàm tương tác db 
$act = "index"; //chức năng mặc định
$message = "";
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {

  case "index":
    $dstinhthanh = getAllTinhThanh();
    $dskv = getAllKhuVuc();
    $view = "views/khuvuc-index.php";
    require_once "layout.php";
    break;

  case "insert":

    $tenkhuvuc = $_POST["tenkhuvuc"];
    $thutu = $_POST["thutu"];
    $anhien = $_POST["anhien"];
    addKhuVuc($tenkhuvuc, $thutu, $anhien);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã thêm thành công!
    </div>";
    header("location:index.php?ctrl=khuvuc");
    break;


  case "edit":
    $idkhuvuc = $_GET["idkhuvuc"];
    settype($idkhuvuc, "int");
    $dskv = getAllKhuVuc();
    $dstinhthanh = getAllTinhThanh();
    $row = getKhuVucByID($idkhuvuc);
    $view = "views/khuvuc-index.php";
    require_once "layout.php";
    break;

  case "update":
    $idkhuvuc = $_POST["idkhuvuc"];
    $tenkhuvuc = $_POST["tenkhuvuc"];
    $thutu = $_POST["thutu"];
    $anhien = $_POST["anhien"];
    updateKhuVuc($idkhuvuc, $tenkhuvuc, $thutu, $anhien);

    $dstinhthanh = getAllTinhThanh();
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã cập nhật thành công!
    </div>";
    header("location:index.php?ctrl=khuvuc");
    break;


  case "delete":
    $idkhuvuc = $_GET["idkhuvuc"];
    settype($idkhuvuc, "int");
    deleteKhuVuc($idkhuvuc);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã xóa thành công!
    </div>";
    header("location:index.php?ctrl=khuvuc");
    break;
}
