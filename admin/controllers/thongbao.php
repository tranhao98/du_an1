<?php
  require_once "models/model_nguoidung.php";
  require_once "models/model_thongbao.php"; //nạp model để có các hàm tương tác db 
  $act = "index";//chức năng mặc định
  $message = "";
  $nguoidung = getAllNguoiDung();
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
  switch ($act) {

    case "index":
      $nguoidung = getAllNguoiDung();
      $dstb = getAllThongBao();
      $view = "views/thongbao-index.php";
      require_once "layout.php";
      break;

    case "addnew":
      $view = "views/thongbao-addnew.php";
      require_once "layout.php";
      break;

    case "insert":
      $idnguoidang = $_POST['idnguoidang'];
      $tieude = $_POST["tieude"];
      $hinh = $_POST["hinh"];
      $ngaydang = $_POST["ngaydang"];
      $noidung = $_POST["noidung"];
      $anhien = $_POST["anhien"];
      settype($idnguoidang, "int");
      settype($thutu, "int");
      $noidung = trim(strip_tags($noidung));
      addNewThongBao($idnguoidang, $tieude, $hinh, $ngaydang, $noidung, $thutu, $anhien);
      header("location:index.php?ctrl=thongbao");
      break;

    case "edit":
      $idtb = $_GET["idtb"];
      settype($idtb, "int");

      $thongbao = getAllThongBao();
      $row = getThongBaoByID($idtb);
      $nguoidung = getAllNguoiDung($row['id']);
      $nd = getAllNguoiDung();

      $view = "views/thongbao-edit.php";
      require_once "layout.php";
      break;  
    case "update":
      $idtb = $_POST["idtb"];
      $idnguoidang = $_POST["idnguoidang"];
      $tieude = $_POST["tieude"];
      $hinh = $_POST["hinh"];
      $ngaydang = $_POST["ngaydang"];
      $noidung = $_POST["noidung"];
      $thutu = $_POST["thutu"];
      $anhien = $_POST["anhien"];
      settype($idtb, "int");
      settype($idnguoidang, "int");
      settype($thutu, "int");
      $idtb = trim(strip_tags($idtb));
      $noidung = trim(strip_tags($noidung));
      updateThongBao($idtb, $idnguoidang, $tieude, $hinh, $ngaydang, $noidung, $thutu, $anhien);

      $message = "Cập nhật thành công!";
      header("location:index.php?ctrl=thongbao");
      break;
      
    case "delete":
      $idtb = $_GET["idtb"];
      settype($idtb, "int");
      deleteThongBao($idtb);
      $message='Xóa Thành Công!';
      header("location:index.php?ctrl=thongbao");
      break;

  }
