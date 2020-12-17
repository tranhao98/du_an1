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
                        <h2>ĐĂNG NHẬP</h2>
                    </div>
                    
                    <form action="?ctrl=user&act=login" class="" method="POST">
                        <label for="">Tên Đăng Nhập: </label>
                        <input class="box" type="text" placeholder="Tên đăng nhập" name="tendangnhap">
                        <label for="">Mật Khẩu: </label>
                        <input class="box" type="password" placeholder="Nhập mật khẩu" name="matkhau">
                        <p class="pull-right m-0"><a href="index.php?ctrl=user&act=quenpass">Quên mật khẩu?</a></p>
                        <button class="btn btn-primary w-100 p-2 mt-4" type="submit">Đăng nhập</button>
                        <div class="col-12 text-center mt-3">
                            <p style="font-size: 14px;">hoặc đăng nhập với:</p>
                            <a type="button" class="btn-floating btn-fb btn-sm">
                                <i style="font-size: 24px;" class="fa fa-facebook-f"></i>
                            </a>
                            <a type="button" class="btn-floating btn-tw btn-sm">
                                <i style="font-size: 24px;" class="fa fa-twitter"></i>
                            </a>
                            <a type="button" class="btn-floating btn-git btn-sm">
                                <i style="font-size: 24px;" class="fa fa-github"></i>
                            </a>
                            <p class="">Nếu bạn chưa có tài khoản hãy <a href="?ctrl=user&act=register">đăng ký ngay!!!!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>