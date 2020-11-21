<?php
require_once "../system/database.php";
function getAllNguoiDung()
{
    $sql = "SELECT * FROM taikhoan";
    return query($sql);
}
// function getNguoiDungByID($iddm) {
//     $sql="SELECT * from taikhoan where iddm='$iddm'";
//     return queryOne($sql);
// }
function getNameNguoiDung($id)
{
    $sql = "SELECT * from taikhoan where id='$id'";
    return queryOne($sql);
}
function kiemTraNguoiDung($tendangnhap)
{
    $sql = "SELECT * from taikhoan where tendangnhap = '$tendangnhap'";
    return queryOne($sql);
}
function addNewNguoiDung($hoten, $ngaysinh, $hinh, $tendangnhap, $email, $matkhau, $sodienthoai, $diachi, $tinhthanh, $quanhuyen, $phuongxa, $gioitinh, $vaitro, $anhien)
{
    $sql = "INSERT INTO taikhoan (hoten, ngaysinh, hinh, tendangnhap, email, matkhau, sodienthoai, diachi, tinhthanh, quanhuyen, phuongxa, gioitinh, vaitro, anhien) 
            VALUES ('$hoten', '$ngaysinh', '$hinh','$tendangnhap', '$email', '$matkhau', '$sodienthoai', '$diachi', '$tinhthanh', '$quanhuyen', '$phuongxa', '$gioitinh', '$vaitro', '$anhien')";
    execute($sql);
}
function getNguoiDungByID1($id)
{
    $sql = "SELECT * from taikhoan where id='$id'";
    return queryOne($sql);
}
function updateNguoiDung($id, $hoten, $ngaysinh, $hinh, $tendangnhap, $email, $matkhau, $sodienthoai, $diachi, $tinhthanh, $quanhuyen, $phuongxa, $gioitinh, $vaitro, $anhien)
{
    if ($hinh != "")
    $sql = "UPDATE taikhoan SET hoten='$hoten', ngaysinh = '$ngaysinh', hinh = '$hinh', tendangnhap='$tendangnhap', email='$email', matkhau='$matkhau', sodienthoai='$sodienthoai', diachi='$diachi',
    tinhthanh='$tinhthanh', quanhuyen='$quanhuyen', phuongxa='$phuongxa', gioitinh='$gioitinh', vaitro='$vaitro', anhien='$anhien' WHERE id='$id'";
    else
    $sql = "UPDATE taikhoan SET hoten='$hoten', ngaysinh = '$ngaysinh', tendangnhap='$tendangnhap', email='$email', matkhau='$matkhau', sodienthoai='$sodienthoai', diachi='$diachi',
    tinhthanh='$tinhthanh', quanhuyen='$quanhuyen', phuongxa='$phuongxa', gioitinh='$gioitinh', vaitro='$vaitro', anhien='$anhien' WHERE id='$id'";
    execute($sql);
}
function deleteNguoiDung($id)
{
    $sql = "delete from taikhoan where id='$id'";
    execute($sql);
}
    // function getNguoiDungByID($id) {
//     $sql="SELECT * from taikhoan where id='$id'";
//     return queryOne($sql);
// }
