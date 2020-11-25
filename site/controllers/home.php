<?php
require_once "../system/config.php";
require_once "models/home.php"; //nạp model để có các hàm tương tác db
$act = "index"; //chức năng mặc định
$dsdm1 = getAllDanhMuc1();
$dsdm2 = getAllDanhMuc2();
$dsbd = getAllBaiDang();
$dskv = getAllKhuVuc();
$dskvspecial = getKhuVucSpecial();
$dstbnew = getThongBaoNew();
$dstball = getThongBaoAll();

if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
    case "index":

        $slider = "views/slider.php";
        $view = "views/home.php";
        require_once "layout.php";
        break;
    case "cat-danhmuc":
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($_POST['gia'] == "") {
                $error = "Bạn cần chọn giá!";
            } else {
                $gia = $_POST['gia'];
            }
            if ($_POST['dientich'] == "") {
                $error = "Bạn cần chọn diện tích!";
            } else {
                $dientich = $_POST['dientich'];
            }
            if ($_POST['loaibds'] == "") {
                $error = "Bạn cần chọn loại!";
            } else {
                $loaibds = $_POST['loaibds'];
            }

            $dsdanhmucsearch = getBaiDangTheoLoc($gia, $dientich, $loaibds);
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
            $gia = $_POST['gia'];
            $dientich = $_POST['dientich'];
            $loaibds = $_POST['loaibds'];
            $dsdanhmucsearch = getBaiDangTheoLoc($gia, $dientich, $loaibds);
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
        $idtb = $_GET['idtb'];
        settype($idtb, "int");
        $rowidtb = getThongBaobyID($idtb);
        $view = "views/thongbaochitiet.php";
        require_once "layout.php";
        break;
    case "xemthemtintuc":
        $view = "views/xemthemtintuc.php";
        require_once "layout.php";
        break;
    case "timkiem":
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $gia = $_POST['gia'];
            $dientich = $_POST['dientich'];
            $loaibds = $_POST['loaibds'];
            $dsdanhmucsearch = getBaiDangTheoLoc($gia, $dientich, $loaibds);
        }

        $key = trim(strip_tags($_POST['tukhoa']));
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
}
