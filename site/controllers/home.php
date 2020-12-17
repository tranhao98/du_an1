<?php
require_once "../system/config.php";
require_once "models/home.php";
require_once "models/model_donvihanhchinh.php";

require_once "models/thongbao.php"; //nạp model để có các hàm tương tác db

$act = "index"; //chức năng mặc định
$dsdm1 = getAllDanhMuc1();
$dsdm2 = getAllDanhMuc2();
$dsbdnoibat = getBaiDangNoiBat();
$dsbd = getAllBaiDang();
$dskv = getKhuVuc();
$dskvall = getAllKhuVuc();
$dskvspecial = getKhuVucSpecial();
$dstbold = getThongBaoOld();
$dstbnew = getThongBaoNew();
$dstball = getThongBaoAll();
$dsdm = getAllDanhMuc();
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
    case "index":

        $slider = "views/slider.php";
        $view = "views/home.php";
        require_once "layout.php";
        break;
    case "cat-danhmuc":
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = 0;
            if (isset($_GET['id']) == true) $id = $_GET['id'];
            $sapxep = $_POST['sapxep'];
            $dientich = $_POST['dientich'];
            $gia = $_POST['gia'];
            if ($gia == "" && $dientich == "" && $sapxep == "") {
                header("location: ?ctrl=home&act=cat-danhmuc&id=$id");
            } else
                $dsfillterdm = getBaiDangTheoLocTheoDanhMuc($id, $gia, $dientich, $sapxep);
        }

        $id = 0;
        if (isset($_GET['id']) == true) $id = $_GET['id'];

        $page_num = 1;
        if (isset($_GET['page_num']) == true) $page_num = $_GET['page_num'];

        settype($id, "int");
        settype($page_num, "int");
        if ($page_num <= 0) $page_num = 1;

        $page_size = PAGE_SIZE;
        $dsdanhmuc = getBaiDangTheoDM($id, $page_num, $page_size);
        $total_rows = demBaiDangTheoDM($id);
        $baseurl = SITE_URL . "/index.php?ctrl=home&act=cat-danhmuc&id={$id}";
        $links = taolinks($baseurl, $page_num, $page_size, $total_rows);
        $view = "views/cat-danhmuc.php";
        require_once "layout.php";
        break;
    case "cat-khuvuc":
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = 0;
            if (isset($_GET['id']) == true) $id = $_GET['id'];
            $sapxep = $_POST['sapxep'];
            $dientich = $_POST['dientich'];
            $gia = $_POST['gia'];
            if ($gia == "" && $dientich == "" && $sapxep == "") {
                header("location: ?ctrl=home&act=cat-khuvuc&id=$id");
            } else
                $dsfillterkv = getBaiDangTheoLocTheoKhuVuc($id, $gia, $dientich, $sapxep);
        }
        $id = 0;
        if (isset($_GET['id']) == true) $id = $_GET['id'];

        $page_num = 1;
        if (isset($_GET['page_num']) == true) $page_num = $_GET['page_num'];

        settype($id, "int");
        settype($page_num, "int");
        if ($page_num <= 0) $page_num = 1;

        $page_size = PAGE_SIZE;
        $dskhuvuc = getBaiDangTheoKV($id, $page_num, $page_size);
        $total_rows = demBaiDangTheoKV($id);
        $baseurl = SITE_URL . "/index.php?ctrl=home&act=cat-khuvuc&id={$id}";
        $links = taolinks($baseurl, $page_num, $page_size, $total_rows);
        $view = "views/cat-khuvuc.php";
        require_once "layout.php";
        break;
    case "baidang":
        $id = 0;
        if (isset($_GET['id']) == true) $id = $_GET['id'];
        settype($id, "int");

        $rowbaidang = getBaiVietById($id);
        $view = "views/baidang.php";
        require_once "layout.php";
        break;
    case "thongbao":
        require_once "views/thongbao.php";
        break;
    case "chitietthongbao":
        $bl_tb = Showbl($row['idtb']);
        $all_bl = ShowALlbl();
        $idtb = $_GET['idtb'];
        settype($idtb, "int");
        $rowidtb = getThongBaobyID($idtb);
        $view = "views/thongbaochitiet.php";
        require_once "layout.php";
        break;
    case "xemthemtintuc":

        $page_num = 1;
        if (isset($_GET['page_num']) == true) $page_num = $_GET['page_num'];

        settype($page_num, "int");
        if ($page_num <= 0) $page_num = 1;

        $page_size = PAGE_SIZE;
        $dsthongbao = getThongBaoND($page_num, $page_size);
        $total_rows = demThongBaoND();
        $baseurl = SITE_URL . "/index.php?ctrl=home&act=xemthemtintuc";
        $link = taolinkstb($baseurl, $page_num, $page_size, $total_rows);
        $view = "views/xemthemtintuc.php";
        require_once "layout.php";
        break;
    case "timkiem":
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $key = "";
            (isset($_GET['tukhoa'])) ? $key = $_GET['tukhoa'] : "";
            $loaibds = $_POST['loaibds'];
            $sapxep = $_POST['sapxep'];
            $dientich = $_POST['dientich'];
            $gia = $_POST['gia'];
            if ($gia == "" && $dientich == "" && $loaibds == "" && $sapxep == "") {
                header("location: ?tukhoa=$key&act=timkiem");
            } else
                $dsfilltertk = getBaiDangTheoLocTheoSearch($key, $gia, $dientich, $loaibds, $sapxep);
        }

        $key = trim(strip_tags($_GET['tukhoa']));
        (isset($_GET['tukhoa'])) ? $key = $_GET['tukhoa'] : "";
        $page_num = 1;
        if (isset($_GET['page_num'])) $page_num = $_GET['page_num'];
        settype($page_num, 'int');
        if ($page_num <= 0) $page_num = 1;
        $page_size = PAGE_SIZE;
        if ($key != "")
            $dstimkiem = getBaiDangTheoTuKhoa($key, $page_num, $page_size);
        else
            $thongbao = '<div class="alert alert-danger text-center" role="alert">
                            Bạn chưa nhập từ khóa!
                        </div>';
        $total_rows = demBaiDangTheoTuKhoa($key);
        $baseurl = "index.php?ctrl=home&act=timkiem&tukhoa={$key}";
        $links = taolinks($baseurl, $page_num, $page_size, $total_rows);
        $view = "views/timkiem.php";
        require_once "layout.php";
        break;
    case "baidang-addnew":
        $nd = getAllNguoiDung();
        $view = "views/baidang-addnew.php";
        require_once "layout.php";
        break;
    case "insert-baidang":
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


        addBaiViet($tieude, $mota, $noithat, $phongngu, $dientich, $khuvuc, $danhmuc, $diachi, $hinh_anh, $hinh_anh2, $hinh_anh3, $hinh_anh4, $hinh_anh5, $hinh_anh6, $gia, $nguoidung);
        $mess = "<div class=\"alert alert-primary\" role=\"alert\">
          Đã thêm thành công!
        </div>";
        $_SESSION['mess'] = $mess;
        header('location:?ctrl=user&act=myarticle&id=' . $_SESSION['sid']);
        break;
    case "edit":
        $id = $_GET['id'];
        settype($id, "int");
        $nguoidung = getAllNguoiDung();
        $dsdm = getAllDanhMuc();
        $dskv = getAllKhuVuc();
        $baiviet = getBaiVietById($id);
        $view = "views/baidang-edit.php";
        require_once "layout.php";
        break;
    case "update-baidang":
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

        updateBaiDang($tieude, $mota, $noithat, $phongngu, $dientich, $khuvuc, $danhmuc, $diachi, $anhien, $noibat, $hinh_anh, $hinh_anh2, $hinh_anh3, $hinh_anh4, $hinh_anh5, $hinh_anh6, $gia, $nguoidung, $id);
        $mess = "<div class=\"alert alert-primary\" role=\"alert\">
          Đã sửa thành công!
        </div>";
        $_SESSION['mess'] = $mess;
        header('location:?ctrl=user&act=myarticle&id=' . $_SESSION['sid']);
        break;
    case "del":
        $id = $_GET["id"];
        settype($id, "int");
        if (deleteBaiViet($id) == TRUE) {
            $mess = "<div class=\"alert alert-primary mt-3\" role=\"alert\">
            Xóa bài viết thất bại.
            </div>";
            $_SESSION['mess'] = $mess;
        } else {
            $mess = "<div class=\"alert alert-primary mt-3\" role=\"alert\">
          Đã xóa bài viết thành công.
        </div>";
            $_SESSION['mess'] = $mess;
        }
        header('location:?ctrl=user&act=myarticle&id=' . $_SESSION['sid']);
        break;
}
