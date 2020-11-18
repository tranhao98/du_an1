<?php
require_once "../system/database.php";




// xem thông báo theo mã
function getAllThongBao()
{
    $sql = "SELECT * FROM thongbao";
    return queryOne($sql);
}

function getAllBaiDang()
{
    $sql = "SELECT * from baidang";
    return query($sql);
}

function getAllDanhMuc1()
{
    $sql = "SELECT * from danhmuc where loai = 1";
    return query($sql);
}
function getAllDanhMuc2()
{
    $sql = "SELECT * from danhmuc where loai = 0";
    return query($sql);
}

function getBaiDangTheoDM($id, $page_num, $page_size)
{
    $start_row = ($page_num - 1) * $page_size;
    $sql = "SELECT * FROM baidang where iddm = '$id'" . "ORDER BY idsp desc limit $start_row, $page_size";
    return query($sql);
}
function demBaiDangTheoDM($iddm)
{
    $sql = "SELECT count(*) as sodong from baidang where iddm = '$iddm'";
    return queryOne($sql)['sodong'];
}
function taolinks($baseurl, $page_num, $page_size, $total_rows)
{
    if ($total_rows <= 0) return "";
    $total_pages = ceil($total_rows / $page_size);
    if ($total_pages <= 1) return "";
    $links = "<ul class='pagination justify-content-center'>";
    if ($page_num >= 2) {
        $links .= "<li class='page-item'><a href='{$baseurl}' class='page-link'> << </a></li>";
        $pr = $page_num - 1;
        $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$pr}' class='page-link'> < </a></li>";
    }
    $links .= "<li class='page-item active'><span class='page-link'>{$page_num}</span></li>";
    if ($page_num < $total_pages) {
        $pn = $page_num + 1;
        $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$pn}' class='page-link'> > </a></li>";
        $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class='page-link'> >> </a></li>";
    }
    $links .= "</ul>";
    return $links;
}
