<?php
  require_once "models/model_danhmuc.php"; //nạp model để có các hàm tương tác db 
  $act = "index";//chức năng mặc định
  $message = "";
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
  switch ($act) {

    case "index":
        // $dsdm = getAllDanhMuc();
        $view = "views/danhmuc-index.php";
        require_once "layout.php";
    break;

    case "insert":
    break;

    case "edit":
        break;  
      case "update":
        break;

  }
