<?php
require_once "../system/database.php";
function getAllBinhLuan($id){
    $sql = "SELECT * FROM binhluan where idtb = '$id'";
    return query($sql);
}
function addNewBinhLuan($noidung, $thoigianbinhluan, $idtb, $idnguoibl, $anhien) {
    $sql="INSERT INTO binhluan (noidung, thoigianbinhluan,  idtb, idnguoibl, anhien) 
    VALUES ('$noidung','$thoigianbinhluan', '$idtb', '$idnguoibl', '$anhien')";
    execute($sql);
 } 

 function getBinhLuanByID($id){
    $sql = "SELECT * FROM binhluan where idbl = '$id'";
    return queryOne($sql);
}

function updateBinhLuan($idbl, $noidung, $thoigianbinhluan, $idtb, $idnguoibl, $anhien){
    $sql = "UPDATE binhluan SET noidung = '$noidung', thoigianbinhluan = '$thoigianbinhluan', idtb = '$idtb', idnguoibl = '$idnguoibl',
     anhien = '$anhien' WHERE idbl = '$idbl'";
    execute($sql);
}

function deleteBinhLuan($id){
    $sql = "DELETE FROM binhluan where idbl = '$id'";
    execute($sql);
}
?>