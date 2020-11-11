
<?php
    require_once "../system/database.php";
    function getAllKhuVuc(){
        $sql="SELECT * FROM khuvuc";
        return query($sql);
    }
    
    function getKhuVucByID($iddm) {
        $sql="SELECT * from khuvuc where idmd='$iddm'";
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
?>