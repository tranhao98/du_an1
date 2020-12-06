<?php
session_start();
require_once "models/home.php";
if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {

    $geturl = $_SERVER['HTTP_REFERER'];
    $idtb = substr($geturl, strpos($geturl, '=') + 22);
    $cmtlist = showcmt($idtb);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <hr>
        <?php
        foreach ($cmtlist as $cmt) {
            
            $name = getnameuser($cmt['idnguoibl']);
            $thoigianbinhluan = $cmt['thoigianbinhluan'];
            $noidung = $cmt['noidung'];
            echo    '<div class="row d-flex align-items-center">
                        <div class="col-2 align-self-center">
                            <img width="100%" src="../upload/'.$_SESSION['hinh'].'">
                        </div>
                        <div class="col-4 align-self-center ml-n3">
                            <a style="font-weight: bold; font-size: 13pt;">' . $name['hoten'] . '</a>
                            <p style=" font-size: 11pt; color: grey;">' . $thoigianbinhluan . ' </p>
                        </div>
                        <div class"col-6" > 
                            <p class="mt-3 ml-3">' . $noidung . '</p>
                        </div>
                        <br>
                    </div>
                    <div class="dropdown-divider"></div>';
        }
        ?>

    </body>

    </html>
<?php } else {
    echo "Bạn vui lòng <a href='index.php?ctrl=user&act=login-index' target='_parent'>đăng nhập!</a>";
}
?>
<script src="../js/jquery/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">