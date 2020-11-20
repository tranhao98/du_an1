<?php
    require_once "../system/database.php";

    function demsoBaiDang(){
        $sql = "SELECT COUNT(*) as soluong from baidang";
        return queryOne($sql)['soluong'];
    }
    function demsoDanhMuc(){
        $sql = "SELECT COUNT(*) as soluong from danhmuc";
        return queryOne($sql)['soluong'];
    }
    function demsoKhuVuc(){
        $sql = "SELECT COUNT(*) as soluong from khuvuc";
        return queryOne($sql)['soluong'];
    }
    function demsoNguoiDung(){
        $sql = "SELECT COUNT(*) as soluong from taikhoan";
        return queryOne($sql)['soluong'];
    }
    function demsoThongBao(){
        $sql = "SELECT COUNT(*) as soluong from thongbao";
        return queryOne($sql)['soluong'];
    }
    ?>