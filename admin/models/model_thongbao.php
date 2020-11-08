

<?php
    require_once "../system/database.php";
    function getAllThongBao(){
        $sql="SELECT * FROM thongbao";
        return query($sql);
    }
    function addNewThongBao($idtb, $tieude, $ngaydang, $noidung, $thutu, $anhien) {
      $sql="INSERT INTO thongbao (idtb, tieude, ngaydang, noidung, thutu, anhien) 
      VALUES ('$idtb', '$tieude', '$ngaydang', '$noidung', '$thutu', '$anhien')";
      execute($sql);
    }
    function getThongBaoByID($idtb) {
        $sql="SELECT * from thongbao where idtb='$idtb'";
        return queryOne($sql);
    }
    // function deleteThongBao($idtb){
    //     $sql= "delete from thongbao where idtb='$idtb'";
    //     execute($sql);
    // }

?>