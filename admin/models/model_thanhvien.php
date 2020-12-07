<?php
require_once "../system/database.php";

function getAllHoaDon(){
    $sql = "SELECT * FROM payments order by timehethan asc";
    return query($sql);
}
function deleteHoaDon($id){
    $sql = "delete from payments where id='$id'";
    execute($sql);
}

?>