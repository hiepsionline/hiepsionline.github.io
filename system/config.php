<?php
include_once 'cauhinh.php';
$config = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$config)
{
	die("KHONG THE KET NOI DEN CSDL ! VUI LONG KIEM TRA LAI");
}
else
{
	mysqli_set_charset($config,'utf8mb4');
}
function _query($sql) {
	GLOBAL $config;
	return mysqli_query($config,$sql);
}
function _fetch($sql) {
	return mysqli_fetch_array(_query($sql));
}
function isset_sql($txt) {
	GLOBAL $config;
	return mysqli_real_escape_string($config,$txt);
}
function _insert($table,$input,$output) {
	return "INSERT INTO $table($input) VALUES($output)";
}
function _select($select,$from,$where) {
	return "SELECT $select FROM $from WHERE $where";
}
function _update($tabname,$input_output,$where) {
	return "UPDATE $tabname SET $input_output WHERE $where";
}

$_succ = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Thành công</strong> ';
$_err = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Thất bại!</strong> ';
$_end = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
function _alert($txt,$txt1) {
	GLOBAL $_succ,$_err,$_end;
	switch ($txt) {
		case 'succ':
		return "$_succ $txt1 $_end";
		break;
		
		case 'err':
		return "$_err $txt1 $_end";
		break;
	}
}
function _console($txt){
	return "<script>console.log('".htmlspecialchars($txt)."')</script>";
}
function _randtxt(){
	$string = "";
	$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	for($i=1; $i<=9; $i++) {
		$position = rand() % strlen($chars);
		$string .= substr($chars, $position, 1);
	}
	return $string;
}
if(date("d") == '30' && date("H") == '23'){
	_query(_update('player',"tongthang='0'","id > '0'"));
}
$time_hst = date("d-m-Y");
// Đường dẫn thư mục
$dir = './history/'.$time_hst.'';
 
// Kiểm tra thư mục đã tồn tại hay chưa
// if(!file_exists($dir)){
//     // Tạo một thư mục mới
//     if(mkdir($dir)){
//       //  echo "Tạo thư mục thành công.";
//     } else{
//        // echo "ERROR: Không thể tạo thư mục.";
//     }
// } else{
//     //echo "ERROR: Thư mục đã tồn tại.";
// }
//chống bug
?>

