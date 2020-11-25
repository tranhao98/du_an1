<?php
require_once "../system/database.php";

function _substr($str, $length, $minword = 3)
{
    $sub = '';
    $len = 0;
    foreach (explode(' ', $str) as $word) {
        $part = (($sub != '') ? ' ' : '') . $word;
        $sub .= $part;
        $len += strlen($part);
        if (strlen($word) > $minword && strlen($sub) >= $length) {
            break;
        }
    }
    return $sub . (($len < strlen($str)) ? '...' : '');
}

function getThongBaoAll()
{
    $sql = "SELECT * FROM thongbao order by ngaydang desc";
    return query($sql);
}
function getThongBaoNew()
{
    $sql = "SELECT * FROM thongbao order by ngaydang desc limit 3";
    return query($sql);
}
function getThongBaobyID($idtb)
{
    $sql = "SELECT * FROM thongbao WHERE idtb = '$idtb'";
    return queryOne($sql);
}
function getNameNguoiDung($id)
{
    $sql = "SELECT * from taikhoan where id='$id'";
    return queryOne($sql);
}
function getAllKhuVuc()
{
    $sql = "SELECT * from khuvuc where not thutu = 1 limit 4";
    return query($sql);
}
function getKhuVucSpecial()
{
    $sql = "SELECT * from khuvuc where thutu = 1";
    return query($sql);
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
function getBaiDangTheoND($id, $page_num, $page_size)
{
    $start_row = ($page_num - 1) * $page_size;
    $sql = "SELECT * FROM baidang where idnguoiban = '$id'" . "ORDER BY idsp desc limit $start_row, $page_size";
    return query($sql);
}
function demBaiDangTheoND($idnguoiban)
{
    $sql = "SELECT count(*) as sodong from baidang where idnguoiban = '$idnguoiban'";
    return queryOne($sql)['sodong'];
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
function getBaiDangTheoKV($id, $page_num, $page_size)
{
    $start_row = ($page_num - 1) * $page_size;
    $sql = "SELECT * FROM baidang where idkhuvuc = '$id'" . "ORDER BY idsp desc limit $start_row, $page_size";
    return query($sql);
}
function demBaiDangTheoKV($idkhuvuc)
{
    $sql = "SELECT count(*) as sodong from baidang where idkhuvuc = '$idkhuvuc'";
    return queryOne($sql)['sodong'];
}
function taolinks($baseurl, $page_num, $page_size, $total_rows)
{
    if ($total_rows <= 0) return "";
    $total_pages = ceil($total_rows / $page_size);
    if ($total_pages <= 1) return "";
    $links = "<ul class='pagination pagination-lg justify-content-center'>";
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
function getTenDanhMuc($id)
{
    $sql = "SELECT tendm from danhmuc where iddm = '$id' ";
    return queryOne($sql)['tendm'];
}
function getTenKhuVuc($id)
{
    $sql = "SELECT tenkhuvuc from khuvuc where idkhuvuc = '$id' ";
    return queryOne($sql)['tenkhuvuc'];
}
function demsoBaiDangTheoKV($id)
{
    $sql = "SELECT COUNT(idsp) as soluong from baidang where idkhuvuc = '$id'";
    return queryOne($sql)['soluong'];
}
function demsoBinhLuanTheoTB($id)
{
    $sql = "SELECT COUNT(idbl) as sobl from binhluan where idtb = '$id'";
    return queryOne($sql)['sobl'];
}
function getBaiVietById($id)
{
    $sql = "SELECT * FROM baidang WHERE idsp = '$id'";
    return queryOne($sql);
}
function kiemTraNguoiDung($tendangnhap)
{
    $sql = "SELECT * from taikhoan where tendangnhap = '$tendangnhap'";
    return queryOne($sql);
}
function getNguoiDungByID($id)
{
    $sql = "SELECT * from taikhoan where id='$id'";
    return queryOne($sql);
}
function getBaiDangTheoTuKhoa($key, $page_num, $page_size)
{
    $start_row = ($page_num - 1) * $page_size;
    $sql = "SELECT * FROM baidang WHERE 1";
    if ($key != "") {
        $sql .= " AND diadiem like '%" . $key . "%'" . "order by idsp desc limit $start_row, $page_size";
    }
    return query($sql);
}
function demBaiDangTheoTuKhoa($key)
{
    $sql = "SELECT count(*) as sodong FROM baidang WHERE diadiem like '%" . $key . "%'";
    return queryOne($sql)['sodong'];
}
