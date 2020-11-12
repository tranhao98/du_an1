

<?php
    require_once "../system/database.php";
    function getAllThongBao(){
        $sql="SELECT * FROM thongbao";
        return query($sql);
    }
    function getThongBaoByID($idtb) {
        $sql="SELECT * from thongbao where idtb='$idtb'";
        return queryOne($sql);
    }
    function addNewThongBao($idnguoidang, $tieude, $hinh, $ngaydang, $noidung, $thutu, $anhien) {
      $sql="INSERT INTO thongbao (idnguoidang, tieude, hinh, ngaydang, noidung, thutu, anhien) 
      VALUES ('$idnguoidang', '$tieude', '$hinh', '$ngaydang', '$noidung', '$thutu', '$anhien')";
      execute($sql);
    }
    function updateThongBao($idtb, $idnguoidang, $tieude, $hinh, $ngaydang, $noidung, $thutu, $anhien) {
        try {
          $sql="UPDATE thongbao SET idtb='$idtb', idnguoidang='$idnguoidang', tieude='$tieude', hinh='$hinh', ngaydang='$ngaydang' ,noidung='$noidung' ,thutu='$thutu',
          anhien='$anhien' WHERE idtb='$idtb'";
          execute($sql);
        }
        catch (Exception  $e) {                         
          print_r($e->errorInfo);
          exit();
        }
    }
    function deleteThongBao($idtb){
        $sql= "delete from thongbao where idtb='$idtb'";
        execute($sql);
    }
    // function getNguoiDungByID($id) {
    //     $sql="SELECT * from taikhoan where id='$id'";
    //     return queryOne($sql);
    // }

?>