<?php
session_start();
require_once "models/model_baidang.php"; //nạp model để có các hàm tương tác db 

$act = "index"; //chức năng mặc định
$message = "";
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
  case "index":
    $view = "views/baidang-index.php";
    require_once "layout.php";
    break;
  case "addnew":
    $view = "views/baidang-addnew.php";
    require_once "layout.php";
    break;
  case "edit":

    $view = "views/baidang-edit.php";
    require_once "layout.php";
    break;
  case "insert":
    $view = "views/baidang-index.php";
    require_once "layout.php";
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
