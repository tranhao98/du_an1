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
?>