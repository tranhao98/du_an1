<?php
  ob_start();
  session_start(); //project nào cũng dùng session
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  define("ARR_CONTROLLER", ["home", "user"]);
  $ctrl='home';
  if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];    
  if (in_array($ctrl, ARR_CONTROLLER)==false) die("Không tồn tại địa chỉ");
  $pathFile ="controllers/$ctrl.php";  
  if (file_exists($pathFile) ==true) require_once $pathFile;
  else echo "Controllers $ctrl không tồn tại";
?>