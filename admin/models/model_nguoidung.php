<?php
    require_once "../system/database.php";
    function getAllNguoiDung(){
        $sql="SELECT * FROM taikhoan";
        return query($sql);
    }
    function getNguoiDungByID($iddm) {
        $sql="SELECT * from taikhoan where iddm='$iddm'";
        return queryOne($sql);
    }
    function getNameNguoiDung($id){
        $sql="SELECT * from taikhoan where id='$id'";
        return queryOne($sql);
    }
?>