<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#staticBackdrop">
    Thêm bình luận
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Bình luận</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="?ctrl=binhluan&act=insert">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nội dung</label>
                        <textarea class="form-control" name="noidung" id="exampleInputEmail1" rows="5"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group">
                            <select class="form-control" name="idtb" id="" placeholder="Tin tức">
                                <option value="" selected>Chọn tin tức</option>
                                <?php foreach ($dstb as $tb) {
                                    if ($row['idtb'] == $tb['idtb']) { ?>
                                        <option value="<?= $tb['idtb'] ?>" selected><?= $tb['tieude'] ?> </option>
                                    <?php } else { ?>
                                    
                                        <option value="<?= $tb['idtb'] ?>"><?= $tb['tieude'] ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <select class="form-control" name="idnguoibl" id="" placeholder="Người bình luận">
                                <option value="" selected>Người dùng</option>
                                <?php foreach ($nguoidung as $nd) {
                                    if ($row['idnguoibl'] == $nd['id']) { ?>
                                        <option value="<?= $nd['id'] ?>" selected><?= $nd['hoten'] ?> </option>
                                    <?php } else { ?>
                                    
                                        <option value="<?= $nd['id'] ?>"><?= $nd['hoten'] ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anhien" id="anhien1" value="1" checked>
                            <label class="form-check-label" for="anhien1"> Hiện </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anhien" id="anhien0" value="0">
                            <label class="form-check-label" for="anhien0">Ẩn</label>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>