<?php

require_once "models/model_thanhvien.php"; //nạp model để có các hàm tương tác db 
$act = "index"; //chức năng mặc định
$message = "";
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
  case "index":
    $dshoadon = getAllHoaDon();
    $view = "views/thanhvien-index.php";
    require_once "layout.php";
  break;
  case "delete":
    $id = $_GET["idhoadon"];
    settype($id, "int");
    deleteHoaDon($id);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã xóa thành công!
    </div>";
    header("location:index.php?ctrl=thanhvien");
  break;

  }