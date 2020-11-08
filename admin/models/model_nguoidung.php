<?php
    require_once "../system/database.php";
    function getAllNguoiDung(){
        $sql="SELECT * FROM nguoidung";
        return query($sql);
    }
    function getNguoiDungByID($iddm) {
        $sql="SELECT * from nguoidung where iddm='$iddm'";
        return queryOne($sql);
    }
?>