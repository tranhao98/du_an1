<?php
    require_once "../system/database.php";

    function _substr($str, $length, $minword = 3)
    {
      $sub = '';
      $len = 0;
      foreach (explode(' ', $str) as $word) {
        $part = (($sub != '') ? ' ' : '') . $word;
        $sub .= $part;
        $len += strlen($part);
        if (strlen($word) > $minword && strlen($sub) >= $length) {
          break;
        }
      }
      return $sub . (($len < strlen($str)) ? '...' : '');
    }

    function addBaiViet($tieude,$mota,$noithat,$phongngu,$dientich,$khuvuc,$danhmuc,$diachi,$anhien,$noibat,$hinh_anh, $hinh_anh2, $hinh_anh3, $hinh_anh4, $hinh_anh5 ,$hinh_anh6,$gia,$nguoidung){
        $sql="INSERT INTO baidang ( iddm, idkhuvuc, idnguoiban, tensp, hinh, hinh2, hinh3, hinh4, hinh5, hinh6, gia, dientich, phongngu, noithat, noibat, mota, diadiem, anhien) 
        VALUES ( '$danhmuc', '$khuvuc', '$nguoidung', '$tieude', '$hinh_anh', '$hinh_anh2', '$hinh_anh3', '$hinh_anh4', '$hinh_anh5', '$hinh_anh6', '$gia', '$dientich', '$phongngu', '$noithat', '$noibat', '$mota', '$diachi', '$anhien')";
        execute($sql);
    }
    function getAllBaiViet(){
        $sql = "SELECT * FROM baidang";
        return query($sql);
    }
    function deleteBaiViet($id){
        $sql= "DELETE FROM baidang where idsp ='$id'";
        execute($sql);
    }
    function getBaiVietById($id){
        $sql= "SELECT * FROM baidang WHERE idsp ='$id'";
        return queryOne($sql);
    }
    function updateBaiViet($tieude,$mota,$noithat,$phongngu,$dientich,$khuvuc,$danhmuc,$diachi,$anhien,$noibat,$hinh_anh,$hinh_anh2, $hinh_anh3, $hinh_anh4, $hinh_anh5, $hinh_anh6, $gia,$nguoidung,$id){
        if($hinh_anh != "") $sql = "UPDATE baidang SET idkhuvuc = '$khuvuc', iddm = '$danhmuc', idnguoiban = '$nguoidung', tensp = '$tieude', hinh = '$hinh_anh', gia = '$gia', dientich = '$dientich', phongngu = '$phongngu', noithat = '$noithat', noibat = '$noibat', mota = '$mota', diadiem = '$diachi', anhien = '$anhien' WHERE idsp = '$id'";
        else if ($hinh_anh2 != "") $sql = "UPDATE baidang SET idkhuvuc = '$khuvuc', iddm = '$danhmuc', idnguoiban = '$nguoidung', tensp = '$tieude', hinh2 = '$hinh_anh2',hinh3 = '$hinh_anh3',hinh4 = '$hinh_anh4',hinh5 = '$hinh_anh5',hinh6 = '$hinh_anh6', gia = '$gia', dientich = '$dientich', phongngu = '$phongngu', noithat = '$noithat', noibat = '$noibat', mota = '$mota', diadiem = '$diachi', anhien = '$anhien' WHERE idsp = '$id'";
        else if ($hinh_anh3 != "") $sql = "UPDATE baidang SET idkhuvuc = '$khuvuc', iddm = '$danhmuc', idnguoiban = '$nguoidung', tensp = '$tieude', hinh3 = '$hinh_anh3',hinh4 = '$hinh_anh4',hinh5 = '$hinh_anh5',hinh6 = '$hinh_anh6', gia = '$gia', dientich = '$dientich', phongngu = '$phongngu', noithat = '$noithat', noibat = '$noibat', mota = '$mota', diadiem = '$diachi', anhien = '$anhien' WHERE idsp = '$id'";
        else if ($hinh_anh4 != "") $sql = "UPDATE baidang SET idkhuvuc = '$khuvuc', iddm = '$danhmuc', idnguoiban = '$nguoidung', tensp = '$tieude', hinh4 = '$hinh_anh4', hinh5 = '$hinh_anh5',hinh6 = '$hinh_anh6', gia = '$gia', dientich = '$dientich', phongngu = '$phongngu', noithat = '$noithat', noibat = '$noibat', mota = '$mota', diadiem = '$diachi', anhien = '$anhien' WHERE idsp = '$id'";
        else if ($hinh_anh5 != "") $sql = "UPDATE baidang SET idkhuvuc = '$khuvuc', iddm = '$danhmuc', idnguoiban = '$nguoidung', tensp = '$tieude', hinh5 = '$hinh_anh5', hinh6 = '$hinh_anh6', gia = '$gia', dientich = '$dientich', phongngu = '$phongngu', noithat = '$noithat', noibat = '$noibat', mota = '$mota', diadiem = '$diachi', anhien = '$anhien' WHERE idsp = '$id'";
        else if ($hinh_anh6 != "") $sql = "UPDATE baidang SET idkhuvuc = '$khuvuc', iddm = '$danhmuc', idnguoiban = '$nguoidung', tensp = '$tieude', hinh6 = '$hinh_anh6', gia = '$gia', dientich = '$dientich', phongngu = '$phongngu', noithat = '$noithat', noibat = '$noibat', mota = '$mota', diadiem = '$diachi', anhien = '$anhien' WHERE idsp = '$id'";
        else $sql = "UPDATE baidang SET idkhuvuc = '$khuvuc', iddm = '$danhmuc', idnguoiban = '$nguoidung', tensp = '$tieude', gia = '$gia', dientich = '$dientich', phongngu = '$phongngu', noithat = '$noithat', noibat = '$noibat', mota = '$mota', diadiem = '$diachi', anhien = '$anhien' WHERE idsp = '$id'";
        execute($sql);
    }
