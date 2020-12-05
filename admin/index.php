<?php
session_start();
if (isset($_SESSION['sid']) && $_SESSION['sid'] > 0 && $_SESSION['vaitro'] == 1) {
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  define("ARR_CONTROLLER", ["home", "baidang", "danhmuc", "khuvuc", "nguoidung", "binhluan", "thongbao","thanhvien"]); //Gán các request được chấp nhận
  $ctrl = 'home'; // ctrl mặc định là home.php

  if (isset($_GET['ctrl']) && ($_GET['ctrl'] != "")) $ctrl = $_GET['ctrl']; //Nhận request trên thanh địa chỉ

  if (in_array($ctrl, ARR_CONTROLLER) == false) die("Không tồn tại địa chỉ");

  $pathFile = "controllers/$ctrl.php";  //Đường dẫn đến controllers

  if (file_exists($pathFile) == true) require_once $pathFile;
  else echo "Địa chỉ $ctrl không tồn tại";
} else {
  header("location: dangnhap.php");
}
