

<?php
    require_once "../system/database.php";
    function getAllDanhMuc(){
        $sql="SELECT * FROM danhmuc";
        return query($sql);
    }
    
    function getDanhMucByID($iddm) {
        $sql="SELECT * from danhmuc where iddm='$iddm'";
        return queryOne($sql);
    }
    function deleteDanhmuc($iddm){
        $sql= "delete from thongbao where iddm='$iddm'";
        execute($sql);
    }

?>