<?php
    require_once "../system/database.php";
    function addBaiViet($tieude,$mota,$noithat,$phongngu,$dientich,$khuvuc,$danhmuc,$diachi,$anhien,$noibat,$hinh_anh,$gia,$nguoidung){
        $sql="INSERT INTO baidang ( iddm, idkhuvuc, idnguoiban, tensp, hinh, gia, dientich, phongngu, noithat, noibat, mota, diadiem, anhien) 
        VALUES ( '$danhmuc', '$khuvuc', '$nguoidung', '$tieude', '$hinh_anh', '$gia', '$dientich', '$phongngu', '$noithat', '$noibat', '$mota', '$diachi', '$anhien')";
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
    function updateBaiViet($tieude,$mota,$noithat,$phongngu,$dientich,$khuvuc,$danhmuc,$diachi,$anhien,$noibat,$hinh_anh,$gia,$nguoidung,$id){
        if($hinh_anh != "") $sql = "UPDATE baidang SET idkhuvuc = '$khuvuc', iddm = '$danhmuc', idnguoiban = '$nguoidung', tensp = '$tieude', hinh = '$hinh_anh', gia = '$gia', dientich = '$dientich', phongngu = '$phongngu', noithat = '$noithat', noibat = '$noibat', mota = '$mota', diadiem = '$diachi', anhien = '$anhien' WHERE idsp = '$id'";
        else $sql = "UPDATE baidang SET idkhuvuc = '$khuvuc', iddm = '$danhmuc', idnguoiban = '$nguoidung', tensp = '$tieude', gia = '$gia', dientich = '$dientich', phongngu = '$phongngu', noithat = '$noithat', noibat = '$noibat', mota = '$mota', diadiem = '$diachi', anhien = '$anhien' WHERE idsp = '$id'";
        execute($sql);
    }
?>  