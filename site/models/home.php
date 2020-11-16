<?php
require_once "../system/database.php";




// xem thông báo theo mã
function getAllThongBao($idtb)
{
    $sql = "SELECT * FROM thongbao WHERE idtb='$idtb'";
    return queryOne($sql);
}
?>