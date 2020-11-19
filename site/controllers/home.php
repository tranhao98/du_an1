<?php
require_once "../system/config.php";
require_once "models/home.php"; //nạp model để có các hàm tương tác db
$act = "index"; //chức năng mặc định
$dsdm1 = getAllDanhMuc1();
$dsdm2 = getAllDanhMuc2();
$dsbd = getAllBaiDang();
$dskv = getAllKhuVuc();
$dskvspecial = getKhuVucSpecial();
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
    case "index":
        $dstb = getAllThongBao();
        $slider = "views/slider.php";
        $view = "views/home.php";
        require_once "layout.php";
        break;
    case "cat-danhmuc":
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
        $slider = "views/slider.php";
        $view = "views/baidang.php";
        require_once "layout.php";
        break;
    case "thongbao":
        require_once "views/thongbao.php";
        break;
    case "chitietthongbao":
        $idtb = $_GET['idtb'];
        settype($idtb, "int");
        $dstb = getAllThongBao();
        $rowidtb = getThongBaobyID($idtb);
        $view = "views/thongbaochitiet.php";
        require_once "layout.php";
        break;
}
