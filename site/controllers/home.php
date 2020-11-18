<?php
require_once "models/home.php"; //nạp model để có các hàm tương tác db
$act = "index"; //chức năng mặc định
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
    case "index":
        $view = "views/home.php";
        require_once "layout.php";
        break;
    case "baidang":
        $view = "views/baidang.php";
        require_once "layout.php";
        break;
    case "chitietthongbao":
        require_once "views/thongbaochitiet.php";
        break;
    }
?>