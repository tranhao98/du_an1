<br>
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <?php if (isset($_SESSION['mess'])) echo $_SESSION['mess'];
        unset($_SESSION['mess']);
        ?>
        <section class="section2">
            <div class="form-transparent">
                <div class="form">
                    <div class="sign-up">
                        <h2>Đăng ký tài khoản mới</h2>
                    </div>
                    <form action="?ctrl=user&act=register" method="POST">
                        <label for="username">Họ và tên: </label>
                        <input class="box" type="text" id="username" placeholder="Nhập tên..." name="hoten" value="<?= $_POST['username']?>">
                        <span id="kqcheckuser" class="d-block">&nbsp;</span>
                        <label for="">Email: </label>
                        <input class="box" type="email" placeholder="Nhập email" required name="email">
                        <label for="">Tên Đăng Nhập: </label>
                        <input class="box" type="text" placeholder="Tên đăng nhập" required name="tendangnhap">
                        <label for="pass">Mật Khẩu: </label>
                        <input class="box" type="password" id="pass" placeholder="Nhập mật khẩu" name="matkhau">
                        <label for="repass">Nhập Lại Mật Khẩu: </label>
                        <input class="box" type="password" id="repass" placeholder="Nhập lại mật khẩu" name="matkhau2">
                        <span id="kqcheckpass" class="d-block"> &nbsp;</span><br>
                        <button class="btn btn-primary" type="submit" name="dangky">Đằng ký</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<br><br>
<script>
    $(document).ready(function() {
        $("#username").blur(function() {
            u = $(this).val();
            $("#kqcheckuser").load("index.php?ctrl=user&act=kiemtrauser&username=" + u);
        });
    });
    $(document).ready(function() {
        $("#repass").blur(function() {
            rp = $(this).val();
            p = $("#pass").val();
            $("#kqcheckpass").load("index.php?ctrl=user&act=kiemtrarepass&pass=" + p + "&repass=" + rp);
            // link = "index.php?act=kiemtrarepass&pass=" + p +"&repass=" + rp;
            // alert(link);
        });
    });
</script>