<!-- Modal -->
<div class="modal fade mt-4" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="staticBackdropLabel1"><img style="width: 60%; height: 80px; object-fit:cover;" src="../upload/logo.png" alt=""></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="dangnhap.php" method="post" class="w-100 mt-2">
                    <div class="form-group">
                        <label for="exampleInputEmail1">TÊN ĐĂNG NHẬP</label>
                        <input type="text" name="tendangnhap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên đăng nhập">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">MẬT KHẨU</label>
                        <input type="password" name="matkhau" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                    </div>
                    <div class="row pl-3">
                        <div class="col-6 text-left form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Nhớ tài khoản</label>
                        </div>
                        <div class="col-6 text-right">
                            <a href="">Quên mật khẩu?</a>
                        </div>
                    </div><br>
                    <input type="submit" name="login" value="ĐĂNG NHẬP" class="btn btn-primary w-100 p-2">
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
                    </div>
                    <?php
                    if (isset($warning) && ($warning != "")) echo $warning;
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>