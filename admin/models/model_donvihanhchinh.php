<?php
    require_once "../system/database.php";
    function getTinhThanhPho(){
        $sql = "SELECT * FROM tinhthanhpho";
        return query($sql);
    }
    function getQuanHuyen(){
        $sql = "SELECT * FROM quanhuyen";
        return query($sql);
    }
    function getPhuongXa(){
        $sql = "SELECT * FROM xaphuongthitran";
        return query($sql);
    }
    function getNameKhuVucHanhChinh($id,$case){
        switch($case){
            case "1":
                $sql = "SELECT * FROM tinhthanhpho WHERE matp = '$id'";
            break;
            case "2":
                $sql = "SELECT * FROM quanhuyen WHERE maqh = '$id'";
            break;
            case "3":
                $sql = "SELECT * FROM xaphuongthitran WHERE xaid = '$id'";
            break;
        }
        return queryOne($sql);
    }
?>