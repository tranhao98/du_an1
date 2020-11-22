<br>
<br>
<br>
<br>
<br>
<br>
<div class="container" >
    <div class="row">
            <div class="col-3" style="min-height: 1000px;">

                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Thông tin & Liên hệ</a>
                    <a href="#" class="list-group-item list-group-item-action">Thông tin tài khoản</a>
                    <a href="#" class="list-group-item list-group-item-action">Thay đổi thông tin tài khoản</a>
                    <a href="#" class="list-group-item list-group-item-action">Đổi mật khẩu</a>
                    <a href="#" class="list-group-item list-group-item-action">Thanh toán & Giỏ hàng</a>
                    <a href="?ctrl=user&act=logout" class="list-group-item list-group-item-action">Đăng xuất</a>
                </div>
            
 
            </div>
<<<<<<< Updated upstream
            <div class="col-9">
                <div class="row">
                    <div class="col-9 list-group">
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Thông tin</a>
                        <div class="d-flex w-100 justify-content-between">
                            <form enctype="multipart/form-data" class="mt-3 mx-auto w-100 bg-input" method="post" action="?ctrl=nguoidung&act=insert">
                                    <div class="form-group">
                                        <label for="">Tên Người Dùng</label>
                                        <input disabled type="text" name="tennguoidung" id="" class="form-control" placeholder="Tên người dùng" aria-describedby="helpId" value="<?=$row['hoten']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ngày Sinh</label>
                                        <input disabled type="date" name="ngaysinh" id="" class="form-control" placeholder="Ngày sinh" aria-describedby="helpId" value="<?=$row['ngaysinh']?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-3" for="">Giới Tính</label> <br>
                                        <div class="form-check form-check-inline">
                                            <?php
                                            $nam = "";
                                            $nu = "";
                                            if($row['gioitinh']==1 ) $nam = "checked"; else $nu = "checked";
                                            ?>
                                            <input disabled class="form-check-input" type="radio" name="gioitinh" id="gioitinh1" value="1" <?=$nam?>>
                                            <label class="form-check-label" for="gioitinh1">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input disabled class="form-check-input" type="radio" name="gioitinh" id="gioitinh0" value="0" <?=$nu?>>
                                            <label class="form-check-label" for="gioitinh0">Nữ</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tên Đăng Nhập</label>
                                        <input disabled type="text" name="tendangnhap" id="" class="form-control" placeholder="Tên đăng nhập" aria-describedby="helpId" value="<?=$row['tendangnhap']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input disabled type="email" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId" value="<?=$row['email']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số Điện Thoại</label>
                                        <input disabled type="text" name="sodienthoai" id="" class="form-control" placeholder="Số điện thoại" aria-describedby="helpId" value="<?='0'.$row['sodienthoai']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa Chỉ</label>
                                        <textarea disabled type="text" name="diachi" id="" class="form-control" placeholder="Ví dụ: Số 18 Quang Trung" aria-describedby="helpId"><?=$row['diachi']?></textarea>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-3">
                        <img class="rounded" alt="200x200" src="../upload/120554587_1759265767546088_98346350129962861_o.jpg" style="width: 100%">
                        <p class="text-center mt-4" style="font-weight: bold;">Khang Dương</p>
                    </div>
                </div>
                
=======
        </nav>
    </header>

    
    <div class="banner header-text">
        <div class="us-0 col-12">   
                    <h4>HỒ SƠ TÀI KHOẢN</h4>
        </div>    
    </div>
    <section  class="section">
        <div class="container">
            <div class="row">
                <table class="us-50 col-12">
                    <tr>
                        <th>TÀI KHOẢN 01</th>       
                    </tr>
                    <tr>
                        <td>
                            <div class="us-card">
                                <div class="us-card-body">
                                    <a href="" class="title-us">SƠ YẾU LÝ LỊCH</a>
                                </div>
                                <div class="us-card-body">
                                    <p>Tên người dùng</p>
                                    <p>Giới tính</p>
                                    <p>Ngày sinh</p>
                                    <p>Quê quán</h4>
                                    <p>Địa chỉ</p>
                                    <p>Số điện thoại</p>
                                    <p>Email</p>
                                    <p>Vai trò</p>
                                    <p>Thời gian tham gia</>
                                </div>
                                <hr>
                            </div>
                        </td>
                        <td>
                            <div class="us-card">
                                <div class="tb-card-body">
                                    <a href="" class="title-us">THÔNG TIN CÁ NHÂN</a>
                                </div>
                                <div class="us-card-body">
                                    <p>Nguyễn Thanh Phong</p>
                                    <p>Nam</p>
                                    <p>24-6-1996</p>
                                    <p>Đồng tháp</p>
                                    <p>74B-Tân thới hiệp-Quận 12- TP HCM</p>
                                    <p>0987128420</p>
                                    <p>phongthanh2914@gmail.com</p>
                                    <p>Quản trị viên</p>
                                    <p>11/11/2020</p>
                                </div>                          
                            </div>
                        </td> 
                    </tr>
                    <tr>
                        <th>TÀI KHOẢN 02</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="us-card">
                                <div class="us-card-body">
                                    <a href="" class="title-us">SƠ YẾU LÝ LỊCH</a>
                                </div>
                                <div class="us-card-body">
                                    <p>Tên người dùng</p>
                                    <p>Giới tính</p>
                                    <p>Ngày sinh</p>
                                    <p>Quê quán</h4>
                                    <p>Địa chỉ</p>
                                    <p>Số điện thoại</p>
                                    <p>Email</p>
                                    <p>Vai trò</p>
                                    <p>Thời gian tham gia</>
                                </div>
                                <hr>
                            </div>
                        </td>
                        <td>
                            <div class="us-card">
                                <div class="tb-card-body">
                                    <a href="" class="title-us">THÔNG TIN CÁ NHÂN</a>
                                </div>
                                <div class="us-card-body">
                                    <p>Nguyễn Gia Lâm</p>
                                    <p>Nam</p>
                                    <p>24-6-1996</p>
                                    <p>Đồng tháp</p>
                                    <p>74B-Tân thới hiệp-Quận 12- TP HCM</p>
                                    <p>0987128420</p>
                                    <p>phongthanh2914@gmail.com</p>
                                    <p>Quản trị viên</p>
                                    <p>11/11/2020</p>
                                </div>                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>TÀI KHOẢN 03</th>       
                    </tr>
                    <tr>
                        <td>
                            <div class="us-card">
                                <div class="us-card-body">
                                    <a href="" class="title-us">SƠ YẾU LÝ LỊCH</a>
                                </div>
                                <div class="us-card-body">
                                    <p>Tên người dùng</p>
                                    <p>Giới tính</p>
                                    <p>Ngày sinh</p>
                                    <p>Quê quán</h4>
                                    <p>Địa chỉ</p>
                                    <p>Số điện thoại</p>
                                    <p>Email</p>
                                    <p>Vai trò</p>
                                    <p>Thời gian tham gia</>
                                </div>
                                <hr>
                            </div>
                        </td>
                        <td>
                            <div class="us-card">
                                <div class="tb-card-body">
                                    <a href="" class="title-us">THÔNG TIN CÁ NHÂN</a>
                                </div>
                                <div class="us-card-body">
                                    <p>Nguyễn Thanh Phong</p>
                                    <p>Nam</p>
                                    <p>24-6-1996</p>
                                    <p>Đồng tháp</p>
                                    <p>74B-Tân thới hiệp-Quận 12- TP HCM</p>
                                    <p>0987128420</p>
                                    <p>phongthanh2914@gmail.com</p>
                                    <p>Quản trị viên</p>
                                    <p>11/11/2020</p>
                                </div>                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>TÀI KHOẢN 04</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="us-card">
                                <div class="us-card-body">
                                    <a href="" class="title-us">SƠ YẾU LÝ LỊCH</a>
                                </div>
                                <div class="us-card-body">
                                    <p>Tên người dùng</p>
                                    <p>Giới tính</p>
                                    <p>Ngày sinh</p>
                                    <p>Quê quán</h4>
                                    <p>Địa chỉ</p>
                                    <p>Số điện thoại</p>
                                    <p>Email</p>
                                    <p>Vai trò</p>
                                    <p>Thời gian tham gia</>
                                </div>
                                <hr>
                            </div>
                        </td>
                        <td>
                            <div class="us-card">
                                <div class="tb-card-body">
                                    <a href="" class="title-us">THÔNG TIN CÁ NHÂN</a>
                                </div>
                                <div class="us-card-body">
                                    <p>Nguyễn Thanh Phong</p>
                                    <p>Nam</p>
                                    <p>24-6-1996</p>
                                    <p>Đồng tháp</p>
                                    <p>74B-Tân thới hiệp-Quận 12- TP HCM</p>
                                    <p>0987128420</p>
                                    <p>phongthanh2914@gmail.com</p>
                                    <p>Quản trị viên</p>
                                    <p>11/11/2020</p>
                                </div>                          
                            </div>
                        </td>
                    </tr>
                </table>
>>>>>>> Stashed changes
            </div>
    </div>
</div>