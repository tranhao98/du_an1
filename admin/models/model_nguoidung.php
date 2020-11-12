<?php
    require_once "../system/database.php";
    function getAllNguoiDung(){
        $sql="SELECT * FROM taikhoan";
        return query($sql);
    }
    function getNguoiDungByID($iddm) {
        $sql="SELECT * from taikhoan where iddm='$iddm'";
        return queryOne($sql);
    }
    function getNameNguoiDung($id){
        $sql="SELECT * from taikhoan where id='$id'";
        return queryOne($sql);
    }
    function kiemTraNguoiDung($tendangnhap, $matkhau){
        $sql = "SELECT * from taikhoan where tendangnhap = '$tendangnhap' and matkhau='$matkhau'";
        return queryOne($sql);
    }
    function addNewNguoiDung($idnguoidung, $hinh, $ngaysinh,  $gioitinh, $vaitro, $tendangnhap, $matkhau, $email, $sodienthoai, $tinhthanh, $quanhuyen, $phuongxa, $diachi, $anhien){
        $sql = "INSERT INTO nguoidung (idnguoidung, hinh, ngaysinh, gioitinh, vaitro, tendangnhap, matkhau, email, sodienthoai, tinhthanh, quanhuyen, phuongxa, diachi, anhien) 
            VALUES ('$idnguoidung, '$hinh','$ngaysinh',  '$gioitinh', '$vaitro', '$tendangnhap', '$matkhau', '$email', '$sodienthoai', '$tinhthanh', '$quanhuyen', '$phuongxa', '$diachi', '$anhien')";
        execute($sql);
   }
    function getNguoiDungByID($id){
        $sql = "SELECT * from nguoidung where id='$id'";
        return queryOne($sql);
    }
    function updateNguoiDung($id, $idnguoidung, $hinh, $ngaysinh,  $gioitinh, $vaitro, $tendangnhap, $matkhau, $email, $sodienthoai, $tinhthanh, $quanhuyen, $phuongxa, $diachi, $anhien){
        try{
            $sql = "UPDATE nguoidung SET id='$id', idnguoidung='$idnguoidung', hinh = '$hinh' ,ngaysinh = '$ngaysinh', gioitinh='$gioitinh', vaitro='$vaitro' ,tendangnhap='$tendangnhap' ,matkhau='$matkhau',
            email='$email', sodienthoai='$sodienthoai', tinhthanh='$tinhthanh', quanhuyen='$quanhuyen', phuongxa='$phuongxa', diachi='$diachi', anhien='$anhien' WHERE id='$id'";
            execute($sql);
        }
        catch (Exception  $e) {                         
            print_r($e->errorInfo);
            exit();
          }
    }
    function deleteNguoiDung($idtb){
        $sql = "delete from nguoidung where id='$id'";
        execute($sql);
    }
    // function getNguoiDungByID($id) {
//     $sql="SELECT * from taikhoan where id='$id'";
//     return queryOne($sql);
// }
?>