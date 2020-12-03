<?php
ob_start();
session_start();
require_once "../system/config.php";
require_once "models/home.php"; //nạp model để có các hàm tương tác db1
require_once "models/model_donvihanhchinh.php"; //nạp model để có các hàm tương tác db1

$dsdm1 = getAllDanhMuc1();
$dsdm2 = getAllDanhMuc2();
$dsbd = getAllBaiDang();
$dskv = getAllKhuVuc();
$dskvspecial = getKhuVucSpecial();
$dstbnew = getThongBaoNew();
$dstball = getThongBaoAll();
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
switch ($act) {
    case "login-index":
        $view = "views/login-index.php";
        require_once "layout.php";
        break;
    case "login":
        $tendangnhap = trim(strip_tags($_POST['tendangnhap']));
        $matkhau = trim(strip_tags($_POST['matkhau']));
        $check = kiemTraNguoiDung($tendangnhap);
        
        
        // var_dump($check);
        $warning = "";
        if (is_array($check)) {
            // $hash = password_hash($matkhau,PASSWORD_DEFAULT);
            $verify = password_verify($matkhau, $check['matkhau']);
            $checkgoi = kiemTraGoi($check['id']);
            // var_dump($hash);
            if ($verify) {
                $_SESSION['goitv'] = $checkgoi['thanh_vien'];
                $_SESSION['hinh'] = $check['hinh'];
                $_SESSION['sid'] = $check['id'];
                $_SESSION['hoten'] = $check['hoten'];
                $_SESSION['vaitro'] = $check['vaitro'];
                if ($check['vaitro'] == 1) header("location: ../admin/index.php");
                else header("location: index.php");
            } else {
                $warning = "<div class='alert alert-danger'>Bạn nhập sai mật khẩu. Vui lòng nhập lại!</div>";
                $_SESSION['mess'] = $warning;
                header("location: ?ctrl=user&act=login-index");
            }
        } else {
            $warning = "<div class='alert alert-primary'>Tài khoản này không tồn tại!</div>";
            $_SESSION['mess'] = $warning;
            header("location: ?ctrl=user&act=login-index");
        }

        break;
    case "logout":
        if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {
            unset($_SESSION['sid']);
            unset($_SESSION['tendangnhap']);
            unset($_SESSION['hoten']);
            unset($_SESSION['hinh']);
            unset($_SESSION['goitv']);
            unset($_SESSION['vaitro']);
            header("location: index.php");
        }
        break;
    case "infouser":
        if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {
            $id = $_SESSION['sid'];
            $row = getNguoiDungByID($id);
        }
        $child = "views/thongtin-index.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
    case "myarticle":
        $id = 0;
        if (isset($_GET['id']) == true) $id = $_GET['id'];

        $page_num = 1;
        if (isset($_GET['page_num']) == true) $page_num = $_GET['page_num'];

        settype($id, "int");
        settype($page_num, "int");
        if ($page_num <= 0) $page_num = 1;

        $page_size = 4;
        $dsnguoidung = getBaiDangTheoND($id, $page_num, $page_size);
        $total_rows = demBaiDangTheoND($id);
        $baseurl = SITE_URL . "/index.php?ctrl=user&act=myarticle&id={$id}";
        $links = taolinks($baseurl, $page_num, $page_size, $total_rows);
        $child = "views/myarticle.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
    case "edit-info":
        if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {
            $id = $_SESSION['sid'];
            $row = getNguoiDungByID($id);
        }
        $child = "views/thongtin-edit.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
        break;
    case "update-info":
        $id = $_POST["id"];
        $hinh = $_FILES['hinh']['name'];
        $target_file = "../upload/" . basename($hinh);
        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);

        $hoten = $_POST["tennguoidung"];
        $ngaysinh = $_POST["ngaysinh"];
        $email = $_POST["email"];
        $tinhthanh = getNameKhuVucHanhChinh($_POST['tinhthanh'], 1)['name'];
        $quanhuyen = getNameKhuVucHanhChinh($_POST['quanhuyen'], 2)['name'];
        $phuongxa = getNameKhuVucHanhChinh($_POST['phuongxa'], 3)['name'];
        $gioitinh = $_POST["gioitinh"];
        $sodienthoai = $_POST["sodienthoai"];
        $diachi = $_POST["diachi"];
        $anhien = $_POST["anhien"];
        settype($id, "int");
        $sodienthoai = trim(strip_tags($sodienthoai));
        $tendangnhap = trim(strip_tags($tendangnhap));
        $hoten = trim(strip_tags($hoten));
        $diachi = trim(strip_tags($diachi));

        updateNguoiDung($id, $hoten, $ngaysinh, $hinh, $email, $sodienthoai, $diachi, $tinhthanh, $quanhuyen, $phuongxa, $gioitinh, $anhien);
        header("location:index.php?ctrl=user&act=infouser");
        break;
    case "thanhtoan":
        $checkgoi = kiemTraGoi($_SESSION['sid']);
        $_SESSION['goitv'] = $checkgoi['thanh_vien'];
            $thongbao = "<div class='alert alert-primary mt-2'>Bạn đang là thành viên. Có thể sử dụng chức năng đăng tin!</div>";
            $_SESSION['message'] = $thongbao;
        
        $child = "views/thanhtoan.php";
        $view = "views/thongtintaikhoan.php";
        require_once "layout.php";
        break;
    case "doimatkhau":
        if (isset($_POST['submit'])) {
            $passcu = ($_POST["passcu"]);
            $p1 = password_hash($_POST['p1'], PASSWORD_DEFAULT);
            $p2 = password_hash($_POST['p2'], PASSWORD_DEFAULT);
            $check = kiemTraMatKhau($_SESSION['sid']);
            if (is_array($check)) {
                $verify = password_verify($passcu, $check['matkhau']);
                if ($verify) {
                    changePass($p1, $_SESSION['sid']);
                    $mess = '<div class="alert alert-primary" role="alert">
                    Bạn đã đổi mật khẩu thành công. Bạn vui lòng đăng nhập lại.
                </div>';
                    $_SESSION['mess'] = $mess;
                    unset($_SESSION['sid']);
                    unset($_SESSION['tendangnhap']);
                    unset($_SESSION['hoten']);
                    unset($_SESSION['hinh']);
                    unset($_SESSION['goitv']);
                    unset($_SESSION['vaitro']);
                    header('location: ?ctrl=user&act=login-index');
                } else {
                    $mess = '<div class="alert alert-primary" role="alert">
                    Mật khẩu không trùng khớp.
                </div>';
                }
            }
        }
        $child = "views/doimatkhau.php";
        $view = "views/thongtintaikhoan.php";

        require_once "layout.php";
        break;   
    case "kiemtra":
        $checkgoi = kiemTraGoi($_SESSION['sid']);
        $_SESSION['goitv'] = $checkgoi['thanh_vien'];
        header("location: ?ctrl=user&act=thanhtoan");
        break;
    case "register":
        if(isset($_POST['dangky'])){
            $hoten = $_POST['hoten'];
            $email = $_POST['email'];
            $tendangnhap = $_POST['tendangnhap'];
            $matkhau = password_hash($_POST['matkhau'], PASSWORD_DEFAULT);;
            $check = kiemTraNguoiDung($tendangnhap);
                if (is_array($check)) {
                    $warning = '<div class="alert alert-primary" role="alert">
                    Tên tài khoản đã tồn tại!!
                  </div>';
                    $_SESSION['mess'] = $warning;
                }
            else {
            $checkmail = kiemTraMail($email);
                if (is_array($checkmail)) {
                    $warning = '<div class="alert alert-primary" role="alert">
                    Địa chỉ mail này đã được đăng ký mời bạn bấm vào đây để lấy lại <a href="?ctrl=user&act=resetpass">mật khẩu</a>
                  </div>';
                    $_SESSION['mess'] = $warning;
                }
                else {
                    $randkey = md5(rand(0,999999));
                    $iduser = addUser($hoten,$email,$tendangnhap,$matkhau,$randkey);


                    require "PHPMailer-master/src/PHPMailer.php"; 
                    require "PHPMailer-master/src/SMTP.php";
                    $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
                    try {
                    $mail->SMTPDebug = 2;  // Enable verbose debug output
                    $mail->isSMTP();  
                    $mail->CharSet  = "utf-8";
                    $mail->Host = 'smtp.gmail.com';  //SMTP servers
                    $mail->SMTPAuth = true; // Enable authentication
                    $mail->Username = 'duongkhang0401@gmail.com';  // SMTP username
                    $mail->Password = 'chochochocho';   // SMTP password
                    $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                    $mail->Port = 465;  // port to connect to               
                    $mail->setFrom('duongkhang0401@gmail.com', 'Quản trị viên');
                    $mail->addAddress($email,$hoten); //mail và tên người nhận    
                    $mail->isHTML(true);  // Set email format to HTML
                    $mail->Subject = 'Kích hoạt tài khoản';                
                    $linkKH = "<a href='?ctrl=user&act=active&id='.$iduser.'&rk='$randkey''>.$hoten.</a>";
                    $linKH = sprintf($linkKH, $iduser, $randkey);
                    $mail->Body= "<h4>Chào mừng thành viên mới</h4>Kích hoạt tài khoản tại đây: ". $linKH;
                    $mail->send();
                    } catch (Exception $e) {
                        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
                    }
                    $text = '<div class="alert alert-primary" role="alert">
                    Đăng ký tài khoản thành công, mời bạn kiểm tra Mail để kích hoạt!!
                  </div>';
                    $_SESSION['mess'] = $text;
                    header("location: ?ctrl=user&act=login-index");
                    }
            }
               
        }
        $view = "views/register.php";
        require_once "layout.php";
    break;
    case "register":

    break;
}
