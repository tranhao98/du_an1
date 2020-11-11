

<?php
    require_once "../system/database.php";
    function getAllThongBao(){
        $sql="SELECT * FROM thongbao";
        return query($sql);
    }
    function addNewThongBao($idnguoidang, $tieude, $ngaydang, $noidung, $thutu, $anhien) {
      $sql="INSERT INTO thongbao (idnguoidang, tieude, ngaydang, noidung, thutu, anhien) 
      VALUES ('$idnguoidang', '$tieude', '$ngaydang', '$noidung', '$thutu', '$anhien')";
      execute($sql);
    }
    function getThongBaoByID($idtb) {
        $sql="SELECT * from thongbao where idtb='$idtb'";
        return queryOne($sql);
    }
    function updateThongBao($idtb, $idnguoidang, $tieude, $ngaydang, $noidung, $thutu, $anhien) {
        try {
          $sql="UPDATE thongbao SET idtb='$idtb', idnguoidang='$idnguoidang', tieude='$tieude', ngaydang='$ngaydang' ,noidung='$noidung' ,thutu='$thutu',
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

?>