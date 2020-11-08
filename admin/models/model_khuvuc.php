

<?php
    require_once "../system/database.php";
    function getAllKhuVuc(){
        $sql="SELECT * FROM khuvuc";
        return query($sql);
    }
    
    function getKhuVucByID($iddm) {
        $sql="SELECT * from khuvuc where idmd='$idmd'";
        return queryOne($sql);
    }

?>