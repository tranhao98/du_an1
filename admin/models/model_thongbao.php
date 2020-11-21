

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
function getAllThongBao()
{
  $sql = "SELECT * FROM thongbao";
  return query($sql);
}
function addNewThongBao($idnguoidang, $hinh, $hinh2,  $tieude, $ngaydang, $noidung, $thutu, $anhien)
{
  $sql = "INSERT INTO thongbao (idnguoidang, hinh, hinh2, tieude, ngaydang, noidung, thutu, anhien) 
      VALUES ('$idnguoidang','$hinh', '$hinh2', '$tieude', '$ngaydang', '$noidung', '$thutu', '$anhien')";
  execute($sql);
}
function getThongBaoByID($idtb)
{
  $sql = "SELECT * from thongbao where idtb='$idtb'";
  return queryOne($sql);
}
function updateThongBao($idtb, $idnguoidang, $hinh, $hinh2, $tieude, $ngaydang, $noidung, $thutu, $anhien)
{
  if ($hinh != "")
    $sql = "UPDATE thongbao SET idtb='$idtb', idnguoidang='$idnguoidang', hinh = '$hinh', tieude='$tieude', ngaydang='$ngaydang' ,noidung='$noidung' ,thutu='$thutu',
          anhien='$anhien' WHERE idtb='$idtb'";
  else if ($hinh2 != "") $sql = "UPDATE thongbao SET idtb='$idtb', idnguoidang='$idnguoidang', hinh2 = '$hinh2', tieude='$tieude', ngaydang='$ngaydang' ,noidung='$noidung' ,thutu='$thutu',
          anhien='$anhien' WHERE idtb='$idtb'";
  else
    $sql = "UPDATE thongbao SET idtb='$idtb', idnguoidang='$idnguoidang', tieude='$tieude', ngaydang='$ngaydang' ,noidung='$noidung' ,thutu='$thutu',
          anhien='$anhien' WHERE idtb='$idtb'";
  execute($sql);
}
function deleteThongBao($idtb)
{
  $sql = "delete from thongbao where idtb='$idtb'";
  execute($sql);
}
// function getNguoiDungByID($id) {
//     $sql="SELECT * from taikhoan where id='$id'";
//     return queryOne($sql);
// }

?>