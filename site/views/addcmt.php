<?php 
 session_start();
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$error = '';
$noidung = '';
$thoigianbinhluan = date("Y/m/d h:i:s");
$comment_name = $_SESSION['hoten'];

if(empty($_POST['noidung'])){
    $error .= "<p class='text-danger'>Bạn chưa nhập bình luận</p>'";
}
else{
    $noidung = $_POST['noidung'];
}
if($error == ""){
    $query = "INSERT INTO binhluan (noidung, thoigianbinhluan, idtb, idnguoibl) 
    VALUES (:noidung, :thoigianbinhluan, :idtb, :idnguoibl)";
    $statement = $conn->prepare($query);
    $statement->execute(
        array(
            ':noidung' => $noidung,
            ':thoigianbinhluan' => $thoigianbinhluan,
            ':idtb' => $_GET['idtb'],
            ':idnguoibl' => $_SESSION['sid']
        )
        );
        $error = '<label class="text-success">Add thành công</label>';
}
$data = array(
    'error' => $error
);
echo json_encode($data);
?>
