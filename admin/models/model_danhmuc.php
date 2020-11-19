

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
    function addDanhMuc($tendm, $loai, $thutu, $anhien){
        $sql="INSERT INTO danhmuc ( tendm, loai, thutu, anhien) 
        VALUES ( '$tendm', '$loai', '$thutu', '$anhien')";
        execute($sql);
    }
    function updateDanhMuc($iddm, $tendm, $loai, $thutu, $anhien){
        try {
          $sql="UPDATE danhmuc SET tendm='$tendm', loai='$loai', thutu='$thutu',
          anhien='$anhien' WHERE iddm='$iddm'";
          execute($sql);
        }
        catch (Exception  $e) {                         
          print_r($e->errorInfo);
          exit();
        }
    }

    function deleteDanhMuc($iddm){
        $sql= "delete from danhmuc where iddm='$iddm'";
        execute($sql);
    }

    function getNameDanhMuc($id){
        $sql="SELECT * from danhmuc where iddm='$id'";
        return queryOne($sql);
    }
?>