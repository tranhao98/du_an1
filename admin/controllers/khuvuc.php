<?php
  require_once "models/model_khuvuc.php"; //nạp model để có các hàm tương tác db 
  $act = "index";//chức năng mặc định
  $message = "";
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
  switch ($act) {

    case "index":
        // $dskv = getAllKhuVuc();
        $view = "views/khuvuc-index.php";
        require_once "layout.php";
    break;

    case "insert":
    break;

    case "edit":
     
      $view = "views/khuvuc-edit.php";
      require_once "layout.php";
      break;    
      case "update":
        break;

  }
