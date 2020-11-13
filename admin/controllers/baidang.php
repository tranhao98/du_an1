<?php

use function PHPSTORM_META\elementType;


require_once "models/model_baidang.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_donvihanhchinh.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_khuvuc.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_danhmuc.php"; //nạp model để có các hàm tương tác db 
require_once "models/model_nguoidung.php"; //nạp model để có các hàm tương tác db 

$act = "index"; //chức năng mặc địnhg
$message = "";
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
  case "index":
    $sanpham = getAllBaiViet();
    $view = "views/baidang-index.php";
    require_once "layout.php";
    break;
  case "addnew":
    $nguoidung = getAllNguoiDung();
    $dsdm = getAllDanhMuc();
    $dskv = getAllKhuVuc();
    $tinh = getTinhThanhPho();
    $huyen = getQuanHuyen();
    $xa = getPhuongXa();
    $view = "views/baidang-addnew.php";
    require_once "layout.php";
    break;
  case "edit":
    $id = $_GET['id'];
    settype($id, "int");
    $nguoidung = getAllNguoiDung();
    $dsdm = getAllDanhMuc();
    $dskv = getAllKhuVuc();
    $tinh = getTinhThanhPho();
    $huyen = getQuanHuyen();
    $xa = getPhuongXa();
    $baiviet = getBaiVietById($id);
    $view = "views/baidang-edit.php";
    require_once "layout.php";
    break;
  case "insert":
    $tieude = trim(strip_tags($_POST['tieude']));
    $gia = trim(strip_tags($_POST['gia']));
    $nguoidung = trim(strip_tags($_POST['idnguoidang']));
    $mota = trim(strip_tags($_POST['mota']));
    $noithat = trim(strip_tags($_POST['noithat']));
    $phongngu = trim(strip_tags($_POST['phongngu']));
    $dientich = trim(strip_tags($_POST['dientich']));
    $khuvuc = $_POST['khuvuc'];
    $danhmuc = $_POST['danhmuc'];
    $tinhthanh = getNameKhuVucHanhChinh($_POST['tinhthanhpho'],1)['name'];
    $quanhuyen = getNameKhuVucHanhChinh($_POST['quanhuyen'],2)['name'];
    $phuongxa = getNameKhuVucHanhChinh($_POST['phuongxa'],3)['name'];
    $diachi = trim(strip_tags($_POST['diachi']));
    $anhien = $_POST['anhien'];
    $diachi = $diachi.', '.$phuongxa.', '.$quanhuyen.', '.$tinhthanh.'.';
    $hinh_anh = $_FILES['hinhanh']['name'];
    $partimg = "../upload/";
    $target_file = $partimg . basename($hinh_anh);
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
    if(isset($_POST['noibat'])) $noibat = 1; else $noibat = 0;

    addBaiViet($tieude,$mota,$noithat,$phongngu,$dientich,$khuvuc,$danhmuc,$diachi,$anhien,$noibat,$hinh_anh,$gia,$nguoidung);
    header('location: ?ctrl=baidang');
    break;
  case "update":
    $id = $_POST['idbaiviet'];
    $tieude = trim(strip_tags($_POST['tieude']));
    $gia = trim(strip_tags($_POST['gia']));
    $nguoidung = trim(strip_tags($_POST['idnguoidang']));
    $mota = trim(strip_tags($_POST['mota']));
    $noithat = trim(strip_tags($_POST['noithat']));
    $phongngu = trim(strip_tags($_POST['phongngu']));
    $dientich = trim(strip_tags($_POST['dientich']));
    $khuvuc = $_POST['khuvuc'];
    $danhmuc = $_POST['danhmuc'];
    $diachi = trim(strip_tags($_POST['diachi']));
    $anhien = $_POST['anhien'];
    $hinh_anh = $_FILES['hinhanh']['name'];
    $partimg = "../upload/";
    $target_file = $partimg . basename($hinh_anh);
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
    if(isset($_POST['noibat'])) $noibat = 1; else $noibat = 0;
    updateBaiViet($tieude,$mota,$noithat,$phongngu,$dientich,$khuvuc,$danhmuc,$diachi,$anhien,$noibat,$hinh_anh,$gia,$nguoidung,$id);
    header('location: ?ctrl=baidang');
    break;
  case "delete":
    $id = $_GET["id"];
    settype($id, "int");
    deleteBaiViet($id);
    $message='Xóa Thành Công!';
    header('location: ?ctrl=baidang');
    break;
}
