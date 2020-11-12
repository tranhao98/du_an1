<?php

use function PHPSTORM_META\elementType;

session_start();
require_once "models/model_baidang.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_donvihanhchinh.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_khuvuc.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_danhmuc.php"; //nạp model để có các hàm tương tác db 

$act = "index"; //chức năng mặc địnhg
$message = "";
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
  case "index":
    $view = "views/baidang-index.php";
    require_once "layout.php";
    break;
  case "addnew":
    $dsdm = getAllDanhMuc();
    $dskv = getAllKhuVuc();
    $tinh = getTinhThanhPho();
    $huyen = getQuanHuyen();
    $xa = getPhuongXa();
    $view = "views/baidang-addnew.php";
    require_once "layout.php";
    break;
  case "edit":

    $view = "views/baidang-edit.php";
    require_once "layout.php";
    break;
  case "insert":
    trim(strip_tags())
    $tieude = $_POST['tieude'];
    $mota = $_POST['mota'];
    $khuvuc = $_POST['khuvuc'];
    $danhmuc = $_POST['danhmuc'];
    $noithat = $_POST['noithat'];
    $phongngu = $_POST['phongngu'];
    $dientich = $_POST['dientich'];
    $tinhthanh = getNameKhuVucHanhChinh($_POST['tinhthanhpho'],1)['name'];
    $quanhuyen = getNameKhuVucHanhChinh($_POST['quanhuyen'],2)['name'];
    $phuongxa = getNameKhuVucHanhChinh($_POST['phuongxa'],3)['name'];
    $diachi = $_POST['diachi'];
    $anhien = $_POST['anhien'];
    $noibat = $_POST['noibat'];
    $diachi = $diachi.', '.$phuongxa.', '.$quanhuyen.', '.$tinhthanh.'.';
    $hinh_anh = $_FILES['hinhanh']['name'];
    $partimg = "../upload/";
    $target_file = $partimg . basename($hinh_anh);
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
    if(isset($noibat)) $noibat == 1; else $noibat == 0;

    // $view = "views/baidang-index.php";
    // require_once "layout.php";
    break;
  case "update":
    
    $view = "views/baidang-index.php";
    require_once "layout.php";
    break;
  case "delete":
    
    $view = "views/baidang-index.php";
    require_once "layout.php";
    break;
}
