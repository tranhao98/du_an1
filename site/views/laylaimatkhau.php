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
                    <form action="?ctrl=user&act=laypass" method="POST" id="">
                        <div class="form-group">
                            <label for="pass">Nhập mật khẩu mới:</label>
                            <input type="password" class="form-control" id="pass" placeholder="" name="p1" required>

                        </div>
                        <div class="form-group">
                            <label for="repass">Nhập lại khẩu mới:</label>
                            <input type="password" class="form-control" id="repass" placeholder="" name="p2" required>
                        </div>
                        <button class="btn btn-primary mt-3 w-100" type="submit" name="xacnhan">Xác nhận</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<br><br>