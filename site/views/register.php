<br>
<br>
<br>
<br>
<script>
    $(function() {
        $("#form_dangky").validate({
            rules: {
                hoten: {
                    required: true,
                    maxlength: 20,
                    minlength: 6
                },
                email: {
                    required: true,
                    email: true
                },
                matkhau: {
                    required: true
                },
                matkhau2: {
                    required: true
                },
            },
            messages: {
                hoten: {
                    required: "<span class='badge badge-warning'>Bạn hãy nhập họ tên vào",
                    maxlength: "<span class='badge badge-danger'>Họ tên dài quá, phải nhỏ hơn 20 ký tự</span>",
                    minlength: "<span class='badge badge-danger'>Họ tên ngắn quá, phải lớn hơn 6 ký tự</span>"
                },
                email: {
                    required: "<span class='badge badge-warning'>Không để trống email</span>",
                    email: "<span class='badge badge-danger'>Phải đúng định dạng email</span>"
                },
                matkhau: {
                    required: "<span class='badge badge-warning'>Không để trống mật khẩu</span>"
                },
                matkhau2: {
                    required: "<span class='badge badge-warning'>Nhập lại mật khẩu</span>"
                },
            }
        });
    });
</script>
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
                    <form action="?ctrl=user&act=register" method="POST" id="form_dangky">
                        <label for="">Họ và tên: </label>
                        <input class="box" type="text" placeholder="Nhập tên..." name="hoten" value="<?= $_POST['username']?>"><br>
                        <label for="">Email: </label>
                        <input class="box" type="email" placeholder="Nhập email" name="email"> <br>
                        <label for="username">Tên Đăng Nhập: </label>
                        <input class="box" type="text"  id="username" placeholder="Tên đăng nhập" name="tendangnhap">
                        <span id="kqcheckuser" class="d-block">&nbsp;</span>
                        <label for="pass">Mật Khẩu: </label>
                        <input class="box" type="password" id="pass" placeholder="Nhập mật khẩu" name="matkhau"> <br>
                        <label for="repass">Nhập Lại Mật Khẩu: </label>
                        <input class="box" type="password" id="repass" placeholder="Nhập lại mật khẩu" name="matkhau2">
                        <span id="kqcheckpass" class="d-block"> &nbsp;</span>
                        <button class="btn btn-primary mt-3" type="submit" name="dangky">Đăng ký</button>
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