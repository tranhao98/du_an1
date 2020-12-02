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
    $mota = $_POST['mota'];
    $noithat = trim(strip_tags($_POST['noithat']));
    $phongngu = trim(strip_tags($_POST['phongngu']));
    $dientich = trim(strip_tags($_POST['dientich']));
    $khuvuc = $_POST['khuvuc'];
    $danhmuc = $_POST['danhmuc'];
    $tinhthanh = getNameKhuVucHanhChinh($_POST['tinhthanhpho'], 1)['name'];
    $quanhuyen = getNameKhuVucHanhChinh($_POST['quanhuyen'], 2)['name'];
    $phuongxa = getNameKhuVucHanhChinh($_POST['phuongxa'], 3)['name'];
    $anhien = $_POST['anhien'];
    $diachi = $phuongxa . ', ' . $quanhuyen . ', ' . $tinhthanh . '.';
    $hinh_anh = $_FILES['hinhanh']['name'];
    $hinh_anh2 = $_FILES['hinhanh2']['name'];
    $hinh_anh3 = $_FILES['hinhanh3']['name'];
    $hinh_anh4 = $_FILES['hinhanh4']['name'];
    $hinh_anh5 = $_FILES['hinhanh5']['name'];
    $hinh_anh6 = $_FILES['hinhanh6']['name'];
    $partimg = "../upload/";
    $target_file = $partimg . basename($hinh_anh);
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh2);
    move_uploaded_file($_FILES["hinhanh2"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh3);
    move_uploaded_file($_FILES["hinhanh3"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh4);
    move_uploaded_file($_FILES["hinhanh4"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh5);
    move_uploaded_file($_FILES["hinhanh5"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh6);
    move_uploaded_file($_FILES["hinhanh6"]["tmp_name"], $target_file);

    if (isset($_POST['noibat'])) $noibat = 1;
    else $noibat = 0;

    addBaiViet($tieude, $mota, $noithat, $phongngu, $dientich, $khuvuc, $danhmuc, $diachi, $anhien, $noibat, $hinh_anh, $hinh_anh2, $hinh_anh3, $hinh_anh4, $hinh_anh5, $hinh_anh6, $gia, $nguoidung);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã thêm thành công!
    </div>";
    header('location: ?ctrl=baidang');
    break;
  case "update":
    $id = $_POST['idbaiviet'];
    $tieude = trim(strip_tags($_POST['tieude']));
    $gia = trim(strip_tags($_POST['gia']));
    $nguoidung = trim(strip_tags($_POST['idnguoidang']));
    $mota = $_POST['mota'];
    
    $noithat = trim(strip_tags($_POST['noithat']));
    $phongngu = trim(strip_tags($_POST['phongngu']));
    $dientich = trim(strip_tags($_POST['dientich']));
    $khuvuc = $_POST['khuvuc'];
    $danhmuc = $_POST['danhmuc'];
    $tinhthanh = getNameKhuVucHanhChinh($_POST['tinhthanhpho'], 1)['name'];
    $quanhuyen = getNameKhuVucHanhChinh($_POST['quanhuyen'], 2)['name'];
    $phuongxa = getNameKhuVucHanhChinh($_POST['phuongxa'], 3)['name'];
    $diachi = $phuongxa . ', ' . $quanhuyen . ', ' . $tinhthanh . '.';
    $anhien = $_POST['anhien'];
    $hinh_anh = $_FILES['hinhanh']['name'];
    $hinh_anh2 = $_FILES['hinhanh2']['name'];
    $hinh_anh3 = $_FILES['hinhanh3']['name'];
    $hinh_anh4 = $_FILES['hinhanh4']['name'];
    $hinh_anh5 = $_FILES['hinhanh5']['name'];
    $hinh_anh6 = $_FILES['hinhanh6']['name'];
    $partimg = "../upload/";
    $target_file = $partimg . basename($hinh_anh);
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh2);
    move_uploaded_file($_FILES["hinhanh2"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh3);
    move_uploaded_file($_FILES["hinhanh3"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh4);
    move_uploaded_file($_FILES["hinhanh4"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh5);
    move_uploaded_file($_FILES["hinhanh5"]["tmp_name"], $target_file);
    $target_file = $partimg . basename($hinh_anh6);
    move_uploaded_file($_FILES["hinhanh6"]["tmp_name"], $target_file);
    if (isset($_POST['noibat'])) $noibat = 1;
    else $noibat = 0;
    updateBaiViet($tieude, $mota, $noithat, $phongngu, $dientich, $khuvuc, $danhmuc, $diachi, $anhien, $noibat, $hinh_anh, $hinh_anh2, $hinh_anh3, $hinh_anh4, $hinh_anh5, $hinh_anh6, $gia, $nguoidung, $id);

    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã cập nhật thành công!
    </div>";
    header('location: ?ctrl=baidang');
    break;
  case "delete":
    $id = $_GET["id"];
    settype($id, "int");
    deleteBaiViet($id);
    $message = "<div class=\"alert alert-primary\" role=\"alert\">
      Đã xóa thành công!
    </div>";
    header('location: ?ctrl=baidang');
    break;
}
