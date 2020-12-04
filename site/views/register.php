<br>
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <?php if(isset($_SESSION['mess'])) echo $_SESSION['mess'];
                unset($_SESSION['mess']);
        ?>
        <section class="section2">
            <div class="form-transparent">
                <div class="form">
                    <div class="sign-up">
                        <h2>Đăng ký tài khoản mới</h2>
                    </div>
                    <form action="?ctrl=user&act=register" method="POST">
                            <label for="">Họ và tên: </label>
                            <input class="box" type="text" placeholder="Nhập tên..." required name="hoten">
                            <label for="">Email: </label>
                            <input class="box" type="email" placeholder="Nhập email" required name="email">
                            <label for="">Tên Đăng Nhập: </label>
                            <input class="box" type="text" placeholder="Tên đăng nhập" required name="tendangnhap">
                            <label for="">Mật Khẩu: </label>
                            <input class="box" type="password" placeholder="Nhập mật khẩu" required name="matkhau">
                            <button class="btn btn-primary"  type="submit" name="dangky">Đằng ký</button>
                        </form>
                </div>
            </div>
        </section>
    </div>
</div>
<br><br>