

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
    function addDanhmuc($tendm, $thutu, $anhien){
        $sql="INSERT INTO danhmuc ( tendm, thutu, anhien) 
        VALUES ( '$tendm', '$thutu', '$anhien')";
        execute($sql);
    }

    function deleteDanhmuc($iddm){
        $sql= "delete from danhmuc where iddm='$iddm'";
        execute($sql);
    }

?>