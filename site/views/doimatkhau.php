<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Thay đổi mật khẩu</a> 
    <form class="mt-3" method="POST" action="?ctrl=user&act=doimatkhau">
    <?php if(isset($mess)) echo $mess;?>
        <div class="form-group">
            <label for="exampleInputPassword1">Mời bạn nhập mật khẩu cũ:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" name="passcu" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mời bạn nhập mật khẩu mới:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" name="p1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mời bạn nhập lại khẩu mới:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" name="p2" required>
            <!-- <span class="badge badge-danger">khnag</span> -->
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Đổi mật khẩu</button>
    </form>
</div>