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
        $sql = "";
    }
?>  