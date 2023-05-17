<?php
session_start();
include_once 'cauhinh.php';

date_default_timezone_set('Asia/Ho_Chi_Minh');
$_login = isset($_login) ? $_login : null;
include_once 'config.php';
$_user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
if($_user != null)
{
	$_login = "on";
	$user_arr = _fetch("SELECT * FROM account Where user='$_user'");
	if(count($user_arr) <= 0){header("location:/?out");}
	$_username = htmlspecialchars($user_arr['user']);
	$_password = htmlspecialchars($user_arr['pass']);
	$_coin = $user_arr['coin'];
	$_coin_old = $user_arr['coin_old'];
	$_tongnap = $user_arr['tongnap'];
	$_online = $user_arr['isOnline'];
	$_char = $user_arr['char'];
	$admin_web = htmlspecialchars($user_arr['admin_web']);
	$_status = htmlspecialchars($user_arr['status']);
	if($_coin != $_coin_old){
		session_destroy();
		$query = _query(_update('account',"lock='1'","user='$_username'"));
		echo 'Phát hiện có bug nếu lỗi liên hệ admin để biết chi tiết';
		exit();
	} /*else if($_tongnap > 0 && mysqli_num_rows(mysqli_query($config,"SELECT * FROM `naptien` WHERE `uid` = '".$_username."' ")) == 0){
		session_destroy();
		$query = _query(_update('account',"lock='1'","user='$_username'"));
		echo 'Phát hiện có bug nếu lỗi liên hệ admin để biết chi tiết';
		exit();
	}*/
	switch ($_status) {
		case 'active':
			$_status_name = '<span style="color:green;font-weight: bold;">Đã kích hoạt';
			break;
		case 'wait':
			$_status_name = '<span style="color:#007BFF;font-weight: bold;"><a href="/active">Kích hoạt ngay</a>';
			break;
		case 'block':
			$_status_name = '<span style="color:red;font-weight: bold;">Đang bị khóa';
			break;
	}
}
else
{
	$_login = null;
}
if (isset($_GET['out']))
{
	session_destroy();
	header("location:/");
}
?>