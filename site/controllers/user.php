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
            $checkbaidang = demBaiDangTheoND($check['id']);
            $checkngayhethan = kiemTraNgay($check['id']);
            $checkgoi = kiemTraGoi($check['id']);
            // var_dump($hash);
            if ($verify) {
                if ($check['active'] == 0) {
                    unset($_SESSION['sid']);
                    unset($_SESSION['tendangnhap']);
                    unset($_SESSION['tongsobaidang']);
                    unset($_SESSION['songayhethan']);
                    unset($_SESSION['hoten']);
                    unset($_SESSION['hinh']);
                    unset($_SESSION['goitv']);
                    unset($_SESSION['vaitro']);
                    $text = '<div class="alert alert-primary" role="alert">
                Tài khoản chưa được kích hoạt! Bạn hãy kiểm tra mail để kích hoạt tài khoản!
              </div>';
                    $_SESSION['mess'] = $text;
                    header("location: ?ctrl=user&act=login-index");
                } else {
                    $_SESSION['songayhethan'] = $checkngayhethan;
                    $_SESSION['tongsobaidang'] = $checkbaidang;
                    $_SESSION['goitv'] = $checkgoi['thanh_vien'];
                    $_SESSION['hinh'] = $check['hinh'];
                    $_SESSION['sid'] = $check['id'];
                    $_SESSION['hoten'] = $check['hoten'];
                    $_SESSION['vaitro'] = $check['vaitro'];
                    if ($check['vaitro'] == 1) header("location: ../admin/index.php");
                    else header("location: index.php");
                }
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
            unset($_SESSION['tongsobaidang']);
            unset($_SESSION['songayhethan']);
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
        $checkbaidang = demBaiDangTheoND($_SESSION['sid']);
        $_SESSION['tongsobaidang'] = $checkbaidang;
        if ($_SESSION['tongsobaidang'] >= 2) {
            $thongbao = "<div class='alert alert-danger mt-2'>Bạn vượt quá số lần đăng bài trong tháng. Không thể đăng bài nữa!!</div>";
            $_SESSION['mess'] = $thongbao;
        }
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
        $thongbao = "<div class='alert alert-success'>Cập nhật thông tin thành công! Bạn hãy đăng nhập lại để thay đổi ảnh đại diện (nếu có).</div>";
        $_SESSION['mess'] = $thongbao;
        header("location:index.php?ctrl=user&act=infouser");
        break;
    case "thanhtoan":
        $checkgoi = kiemTraGoi($_SESSION['sid']);
        $_SESSION['goitv'] = $checkgoi['thanh_vien'];
        $checkngayhethan = kiemTraNgay($_SESSION['sid']);
        $_SESSION['songayhethan'] = "<div class='alert alert-warning'>Gói thành viên của bạn còn $checkngayhethan ngày.</div>";
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
                    unset($_SESSION['songayhethan']);
                    unset($_SESSION['hinh']);
                    unset($_SESSION['tongsobaidang']);
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
    case "kiemtrauser":
        $username = "";
        if (isset($_GET['username'])) $username = $_GET['username'];
        if ($username == "") echo "<span class='badge badge-danger'>Chưa có tên đăng nhập!</span>";
        elseif (checkUserTontai($username)) echo "<span class='badge badge-danger'>Tên đăng nhập đã tồn tại!</span>";
        else echo "<span class='badge badge-success'>Tên đăng nhập hợp lệ</span>";
        break;
    case "kiemtrarepass":
        $repass = "";
        if (isset($_GET['repass'])) $repass = $_GET['repass'];
        if (isset($_GET['pass'])) $pass = $_GET['pass'];
        if ($repass == "") echo "<span class='badge badge-danger'>Vui lòng nhập mật khẩu!</span>";
        elseif ($repass != $pass) echo "<span class='badge badge-danger'>Mật khẩu không khớp!</span>";
        else echo "<span class='badge badge-success'>Mật khẩu trùng khớp</span>";
        break;
    case "kiemtra":
        $checkgoi = kiemTraGoi($_SESSION['sid']);
        $_SESSION['goitv'] = $checkgoi['thanh_vien'];
        header("location: ?ctrl=user&act=thanhtoan");
        break;
    case "register":
        if (isset($_POST['dangky'])) {
            $hoten = $_POST['hoten'];
            $email = trim(strip_tags($_POST['email']));
            $tendangnhap = $_POST['tendangnhap'];
            $matkhau = password_hash($_POST['matkhau'], PASSWORD_DEFAULT);;
            $check = kiemTraNguoiDung($tendangnhap);
            if (is_array($check)) {
                $warning = '<div class="alert alert-primary" role="alert">
                    Tên tài khoản đã tồn tại!!
                  </div>';
                $_SESSION['mess'] = $warning;
            } else {
                $checkmail = kiemTraMail($email);
                if (is_array($checkmail)) {
                    $warning = '<div class="alert alert-primary" role="alert">
                    Địa chỉ mail này đã được đăng ký mời bạn bấm vào đây để lấy lại <a href="?ctrl=user&act=resetpass">mật khẩu</a>
                  </div>';
                    $_SESSION['mess'] = $warning;
                } else {
                    $randkey = md5(rand(0, 999999));
                    $iduser = -addUser($hoten, $email, $tendangnhap, $matkhau, $randkey);
                    require "PHPMailer-master/src/PHPMailer.php";
                    require "PHPMailer-master/src/SMTP.php";
                    $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
                    try {
                        $mail->SMTPDebug = 0;  // Enable verbose debug output
                        $mail->isSMTP();
                        $mail->CharSet  = "utf-8";
                        $mail->Host = 'smtp.gmail.com';  //SMTP servers
                        $mail->SMTPAuth = true; // Enable authentication
                        $mail->Username = 'haolong1506@gmail.com';  // SMTP username
                        $mail->Password = 'nhomduan1';   // SMTP password
                        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                        $mail->Port = 465;  // port to connect to               
                        $mail->setFrom('haolong1506@gmail.com', 'Quản trị viên');
                        $mail->addAddress($email, $hoten); //mail và tên người nhận    
                        $mail->isHTML(true);  // Set email format to HTML
                        $mail->Subject = 'Kích hoạt tài khoản';
                        $linkKH = "<a href='http://localhost/du_an1/site/index.php?ctrl=user&act=active&id=%d&rk=%s'>$hoten</a>";
                        $linKH = sprintf($linkKH, $iduser, $randkey);
                        $mail->Body = "<h4>Chào mừng thành viên mới</h4>Click vào link dưới để kích hoạt tài khoản: " . $linKH;
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
    case "active":
        if ($_GET['act'] == "active") {
            $iduser = $_GET['id'];
            $rd = $_GET['rk'];
            $checkactive = checkActive($iduser, $rd);
            if (is_array($checkactive)) {

                active($iduser);
                $text = '<div class="alert alert-primary" role="alert">
                Kích hoạt tài khoản thành công. Mời bạn đăng nhập.
              </div>';
                $_SESSION['mess'] = $text;
                header("location: ?ctrl=user&act=login-index");
            }
        }
        break;
    case "quenpass":
        $view = "views/emailquenpass.php";
        require_once "layout.php";
        break;
    case "quenpass_":
        $email = trim(strip_tags($_POST['email']));
        $checkmail = kiemTraMail($email);
        if (!is_array($checkmail)) {
            $warning = '<div class="alert alert-primary" role="alert">
                    Email không tồn tại!</a>
                  </div>';
            $_SESSION['mess'] = $warning;
        } else {
            $randkey = md5(rand(0, 999999));
            require "PHPMailer-master/src/PHPMailer.php";
            require "PHPMailer-master/src/SMTP.php";
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
            try {
                $mail->SMTPDebug = 0;  // Enable verbose debug output
                $mail->isSMTP();
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                $mail->SMTPAuth = true; // Enable authentication
                $mail->Username = 'haolong1506@gmail.com';  // SMTP username
                $mail->Password = 'nhomduan1';   // SMTP password
                $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                $mail->Port = 465;  // port to connect to               
                $mail->setFrom('haolong1506@gmail.com', 'Quản trị viên');
                $mail->addAddress($email); //mail và tên người nhận    
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = 'Lấy lại mật khẩu';
                $linkKH = "<a href='" . $_SERVER['HTTP_HOST'] .
                    "/du_an1/site/index.php?ctrl=user&act=laypass&email=$email&rd=$randkey'>Nhấp vào đây</a>";
                $linKH = sprintf($linkKH, $randkey);
                $mail->Body = "<h4>Đây là địa chỉ URL để bạn xác nhận đổi mật khẩu!</h4>Click vào link dưới để đổi mật khẩu: " . $linKH;
                $mail->send();
            } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }
            $text = '<div class="alert alert-success" role="alert">
                Gửi thông tin thành công! Mời bạn kiểm tra hòm thư Email!
              </div>';
            $_SESSION['mess'] = $text;
            header("location: index.php?ctrl=user&act=quenpass");
        }
        break;
    case "laypass":
        if ($_GET['act'] == "laypass") {
            $m = $_GET['email'];
            $rd = $_GET['rd'];
            $checkemail = checkEmail($m, $rd);
            if (is_array($checkemail)) {
                $p1 = password_hash($_POST['p1'], PASSWORD_DEFAULT);
                $p2 = password_hash($_POST['p2'], PASSWORD_DEFAULT);

                changePass2($p1, $m);
                $mess = '<div class="alert alert-primary" role="alert">
                            Bạn đã đổi mật khẩu thành công. Bạn vui lòng đăng nhập lại.
                        </div>';
                $_SESSION['mess'] = $mess;
                unset($_SESSION['sid']);
                unset($_SESSION['tendangnhap']);
                unset($_SESSION['hoten']);
                unset($_SESSION['songayhethan']);
                unset($_SESSION['hinh']);
                unset($_SESSION['tongsobaidang']);
                unset($_SESSION['goitv']);
                unset($_SESSION['vaitro']);
                header('location: ?ctrl=user&act=login-index');
            }
        }
        $view = "views/laylaimatkhau.php";
        require_once "layout.php";
        break;
}
