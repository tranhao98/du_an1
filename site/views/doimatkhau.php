<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Thay đổi mật khẩu</a>
    <form class="mt-3 mb-3" method="POST" action="?ctrl=user&act=doimatkhau">
        <?php if (isset($mess)) echo $mess; ?>
        <div class="form-group">
            <label for="exampleInputPassword1">Mời bạn nhập mật khẩu cũ:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" name="passcu" required>
        </div>
        <div class="form-group">
            <label for="pass">Nhập mật khẩu mới:</label>
            <input type="password" class="form-control" id="pass" placeholder="" name="p1" required>

        </div>
        <div class="form-group">
            <label for="repass">Nhập lại khẩu mới:</label>
            <input type="password" class="form-control" id="repass" placeholder="" name="p2" required>
            <span id="kqcheckpass" class="d-block mt-1"> &nbsp;</span>
            <!-- <span class="badge badge-danger">khnag</span> -->
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Đổi mật khẩu</button>
    </form>
</div>
<script>
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