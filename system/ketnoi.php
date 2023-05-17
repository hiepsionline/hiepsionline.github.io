<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include_once 'cauhinh.php';
$ketnoi = @mysqli_connect($db_host,$db_user,$db_pass,$db_name ) or die("$_domain: thong tin ket noi du lieu chua chinh xac");
@mysqli_set_charset($ketnoi,"utf8");

function get_string_tinhtrangthe($tinhtrangthe) {
switch ($tinhtrangthe) {
case 0:
$str = '<span class="btn btn-warning form-fontrol">Chờ xử lý</span>';
break;
case 1:
$str = '<span class="btn btn-success form-fontrol">Nạp Thành Công</span>';
break;
case 2:
$str = '<div class="btn" style="background-color:red;color:#fff; ">Thẻ Sai</div>';
break;
default:
$str = '<span class="btn btn-danger form-fontrol">Lỗi Chưa Xác Định</span>';
break;
}
return $str;
}

/////////////////////////
//   //
// Xoá đi hoặc sửa nếu bị bug thì mình k chịu trách nhiệm //
///////////////////////// GET
 foreach($_GET as $var => $value) {
 
    $_GET["$var"]= htmlspecialchars(mysqli_real_escape_string($ketnoi, $value));

}

// POST
foreach($_POST as $var => $value) {

    $_POST["$var"] = htmlspecialchars(mysqli_real_escape_string($ketnoi, $value));
  
}
 

// $_SESSION
foreach($_SESSION as $var => $value) {
   
    $_SESSION["$var"]= htmlspecialchars(mysqli_real_escape_string($ketnoi, $value));
}


// $_COOKIE
foreach($_COOKIE as $var => $value) {

    $_COOKIE["$var"]= htmlspecialchars(mysqli_real_escape_string($ketnoi, $value));
}

$tacgia = $_SERVER["HTTP_HOST"];
date_default_timezone_set('Asia/Ho_Chi_Minh');




?>