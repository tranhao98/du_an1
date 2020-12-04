<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="staticBackdropLabel1">Thanh toán Gói Thành viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Bạn có đồng ý thanh toán không?</h6>
                <form action="../vnpay_php/vnpay_create_payment.php" id="create_form" method="post">
                    <div class="form-group">
                        <input class="form-control" id="order_id" name="order_id" type="hidden" value="<?php echo date("YmdHis") ?>" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="amount" name="amount" type="hidden" value="147317">
                    </div>
                    <div class="form-group">
                        <textarea style="display:none;" class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Thanh toán Gói Thành viên</textarea>
                    </div>
                    <div class="form-group">
                        <select style="display:none;" name="language" id="language" class="form-control">
                            <option value="vn" selected>Tiếng Việt</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-secondary pull-right ml-2" data-dismiss="modal">Đóng</button>
                    <input type="submit" class="btn btn-primary pull-right" value="Thanh toán">
                </form>
            </div>

        </div>
    </div>
</div>
<link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet" />
<script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>