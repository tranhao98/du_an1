
<?php
    require_once "../system/database.php";
    function getAllKhuVuc(){
        $sql="SELECT * FROM khuvuc";
        return query($sql);
    }
    
    function getKhuVucByID($idkhuvuc) {
        $sql="SELECT * from khuvuc where idkhuvuc= '$idkhuvuc'";
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
        $sql="INSERT INTO khuvuc (tenkhuvuc, thutu, anhien) 
        VALUES ( '$tenkhuvuc', '$thutu', '$anhien')";
        execute($sql);
    }
    function updateKhuVuc($idkhuvuc, $tenkhuvuc, $thutu, $anhien){
        try {
          $sql="UPDATE khuvuc SET tenkhuvuc='$tenkhuvuc', thutu='$thutu',
          anhien='$anhien' WHERE idkhuvuc='$idkhuvuc'";
          execute($sql);
        }
        catch (Exception  $e) {                         
          print_r($e->errorInfo);
          exit();
        }
    }

    function deleteKhuVuc($idkhuvuc){
        $sql= "delete from khuvuc where idkhuvuc='$idkhuvuc'";
        execute($sql);
    }

    function getNameKhuVuc($id){
        $sql="SELECT * from khuvuc where idkhuvuc='$id'";
        return queryOne($sql);
    }
?>