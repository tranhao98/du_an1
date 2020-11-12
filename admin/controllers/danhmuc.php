<?php
  require_once "models/model_danhmuc.php"; //nạp model để có các hàm tương tác db 
  $act = "index";//chức năng mặc định
  $message = "";

  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
  switch ($act) {

    case "index":
      $dsdm = getAllDanhMuc();
      $view = "views/danhmuc-index.php";
      require_once "layout.php";
    break;

    case "insert":
      $tendm= $_POST["tendm"];
      $thutu = $_POST["thutu"];
      $anhien = $_POST["anhien"];
      addDanhmuc($tendm, $thutu, $anhien);    
      header("location:index.php?ctrl=danhmuc");
      break;

    case "edit":   
      $iddm = $_GET["iddm"];
      settype($iddm, "int");
      $row = getDanhMucByID($iddm);
      $view = "views/danhmuc-edit.php";
      require_once "layout.php";
      break;  

    case "update":
      $iddm = $_POST["iddm"];
      $tendm = $_POST["tendm"];
      $thutu = $_POST["thutu"];
      $anhien = $_POST["anhien"];
      updateDanhMuc($iddm, $tendm, $thutu, $anhien);
      $message = "Cập nhật thành công!";
      header("location:index.php?ctrl=danhmuc");
      break;
        
    case "delete":
      $iddm = $_GET["iddm"];
      settype($iddm, "int");
      deleteDanhmuc($iddm);
      $message='Xóa Thành Công!';
      header("location:index.php?ctrl=danhmuc");
      break;
    

  }
