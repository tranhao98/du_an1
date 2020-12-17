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
                        <h2>Vui lòng nhập email để lấy lại mật khẩu</h2>
                    </div>
                    <form action="?ctrl=user&act=quenpass_" method="POST" id="">
                        <label for="">Email: </label>
                        <input class="box" type="email" placeholder="Nhập email" name="email"> <br>
                        <button class="btn btn-primary mt-3 w-100" type="submit" name="gui">Lấy lại mật khẩu</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<br><br>