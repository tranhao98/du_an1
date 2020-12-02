<?php
require_once "../system/database.php";



function getThongBaoOld()
{
    $sql = "SELECT * FROM thongbao order by ngaydang asc limit 3";
    return query($sql);
}
function getThongBaoND($page_num, $page_size)
{
    $start_row = ($page_num - 1) * $page_size;
    $sql = "SELECT * FROM thongbao ORDER BY ngaydang desc limit $start_row, $page_size";
    return query($sql);
}
function demThongBaoND()
{
    $sql = "SELECT count(*) as sodong from thongbao";
    return queryOne($sql)['sodong'];
}
function taolinkstb($baseurl, $page_num, $page_size, $total_rows)
{
    if ($total_rows <= 0) return "";
    $total_pages = ceil($total_rows / $page_size);
    if ($total_pages <= 1) return "";
    $links = "<ul class='pagination pagination-lgg justify-content-center'>";
    if ($page_num >= 2) {
        $links .= "<li class='page-item'><a href='{$baseurl}' class='page-link'> <i class='fas fa-arrow-circle-left'></i> </a></li>";
        $pr = $page_num - 1;
        $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$pr}' class='page-link'> 1 </a></li>";
    }
    $links .= "<li class='page-item active'><span class='page-link'>{$page_num}</span></li>";
    if ($page_num < $total_pages) {
        $pn = $page_num + 1;
        $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$pn}' class='page-link'> 2 </a></li>";
        $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class='page-link'> <i class='fas fa-arrow-circle-right'></i> </a></li>";
    }
    $links .= "</ul>";
    return $links;
}

// xem bl theo idtb
function Showbl($idtb){
    $sql = "SELECT * FROM binhluan WHERE idtb = '$idtb'";
    return queryOne($sql);
}
// xem bl
function ShowALlbl(){
    $sql = "SELECT * FROM binhluan";
    return query($sql);
}
// xem tất cả theo khách hang
function showBlKhachhang($id){
    $sql = "SELECT * FROM taikhoan WHERE id = '$id'";
    return queryOne($sql);
}