
<?php
    require_once "../system/database.php";
    function getAllKhuVuc(){
        $sql="SELECT * FROM khuvuc";
        return query($sql);
    }
    
    function getKhuVucByID($idkv) {
        $sql="SELECT * from khuvuc where idkv='$idkv'";
        return queryOne($sql);
    }
    function getAllTinhThanh(){
        $sql="SELECT * FROM tinhthanhpho";
        return query($sql);
    }
    function getAllQuanHuyenTheoTinhThanh(){
        $sql="SELECT * FROM quanhuyen";
        return query($sql);
    }
    function getAllPhuongXa(){
        $sql="SELECT * FROM xaphuongthitran";
        return query($sql);
    }
    function addKhuVuc($tenkhuvuc, $thutu, $anhien){
        $sql="INSERT INTO khuvuc ( tenkhuvuc, thutu, anhien) 
        VALUES ( '$tenkhuvuc', '$thutu', '$anhien')";
        execute($sql);
    }

    function deleteKhuVuc($idkhuvuc){
        $sql= "delete from khuvuc where idkhuvuc='$idkhuvuc'";
        execute($sql);
    }
?>