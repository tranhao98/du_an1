<?php

$dataPoints = array(
    array("label" => "Người dùng", "y" => demsoNguoiDung()),
    array("label" => "Khu vực", "y" => demsoKhuVuc()),
    array("label" => "Danh mục", "y" => demsoDanhMuc()),
    array("label" => "Bài đăng", "y" => demsoBaiDang()),
    array("label" => "Thông báo", "y" => demsoThongBao())
);
?>
<script>
    window.onload = function() {


        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Biểu đồ"
            },
            data: [{
                type: "pie",
                indexLabel: "{y}",
                yValueFormatString: "",
                indexLabelPlacement: "inside",
                indexLabelFontColor: "#36454F",
                indexLabelFontSize: 16,
                indexLabelFontWeight: "bolder",
                showInLegend: true,
                legendText: "{label}",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    }
</script>
<div class="container">
    <div class="row content shadow-sm mb-3 bg-white rounded ">
        <div class="col-8 text-left h-100 p-0 p-3 mt-n1">
            <h5 class="font-weight-bold">Tổng quan về trang</h5>
        </div>
    </div>
    <div class="row shadow-sm bg-white rounded p-3">
        <div class="col-3">
            <div class="panel panel-primary border border-primary">
                <div class="panel-heading p-3 bg-primary">
                    <div class="row text-white">
                        <div class="col-3 text-left">
                            <i class="fa fa-comments fa-4x"></i>
                        </div>
                        <div class="col-9 text-right">
                            <div class="huge"><?=demsoDanhMuc()?></div>
                            <div>Danh Mục</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer p-2">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="panel panel-green border border-success">
                <div class="panel-heading p-3">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-tasks fa-4x"></i>
                        </div>
                        <div class="col-9 text-right">
                            <div class="huge"><?=demsoKhuVuc()?></div>
                            <div>Khu Vực!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer p-2">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="panel panel-yellow border border-warning">
                <div class="panel-heading p-3">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-shopping-cart fa-4x"></i>
                        </div>
                        <div class="col-9 text-right">
                            <div class="huge"><?=demsoNguoiDung()?></div>
                            <div>Người Dùng!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer p-2">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="panel panel-red border border-danger">
                <div class="panel-heading p-3">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-support fa-4x"></i>
                        </div>
                        <div class="col-9 text-right">
                            <div class="huge"><?=demsoThongBao()?></div>
                            <div>Thông Báo!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer p-2">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-6 mt-3">
            <div class="panel panel-secondary border border-secondary">
                <div class="panel-heading p-3 bg-secondary">
                    <div class="row text-white">
                        <div class="col-3">
                            <i style="font-size: 120px;" class="fa fa-support"></i>
                        </div>
                        <div class="col-9 text-right">
                            <div class="huge1"><?=demsoBaiDang()?></div>
                            <div style="font-size: 30px;">Bài đăng!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer p-2">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 mt-3 h-50">
            <div id="chartContainer" style="height: 220px; width: 100%;"></div>
        </div>

    </div>
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
