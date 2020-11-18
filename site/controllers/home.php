<?php
require_once "models/home.php"; //nạp model để có các hàm tương tác db
$act = "index"; //chức năng mặc định
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
    case "index":
        require_once "views/home.php";
        break;
    case "baidang":
        require_once "views/baidang.php";
        break;
    case "chitietthongbao":
        require_once "views/thongbaochitiet.php";
        break;
    }
?>