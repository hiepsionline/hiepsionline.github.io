<?php
/*
-----------------------------------
|                                 |
| code by MR . Chíp         |
| Không xóa để tôn trọng tác giả  |
|                                 |
----------------------------------|    */
date_default_timezone_set("Asia/Ho_Chi_Minh");
include("$_SERVER[DOCUMENT_ROOT]/system/cauhinh.php");
include("$_SERVER[DOCUMENT_ROOT]/system/ketnoi.php");



    if (!isset($_POST['namenap']) || !isset($_POST['telco']) || !isset($_POST['amount']) || !isset($_POST['serial']) || !isset($_POST['code'])) {
        exit(json_encode(array('status' => '1' , 'msg' => 'Lỗi nhập đầy đủ thông tin', 'type' => 'error')));   
    } else {
		$sv = $_SERVER['DOCUMENT_ROOT'];
		$ch = curl_init();
$partner_key = "9ba67ac2877a3fef2cd3281fca22521c";
$telco= $_POST['telco'];
$code= $_POST['code'];
$serial= $_POST['serial'];
$amount= $_POST['amount'];
$request_id= rand(100000000, 999999999);
$partner_id="38098469229"; 
$namenap = $_POST['namenap'];
$sign = md5($partner_key.$code.$serial);
$command="charging";
$dataPost = array(
       'telco' => $telco,
       'code' => $code,
       'serial' => $serial,
       'amount' => $amount,
       'partner_id' => $partner_id,
       'sign' => $sign,
       'command' => $command,
       'request_id' => $request_id
        );
   
$cookie = $sv.'/cookie.txt';
curl_setopt_array($ch,[
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'Mozilla/5.0 (Linux; Android 5.1; HUAWEI LUA-U22 Build/HUAWEILUA-U22; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/92.0.4515.115 Mobile Safari/537.36',
CURLOPT_URL => 'https://thesieure.com/chargingws/v2',
CURLOPT_POST => count($dataPost),
CURLOPT_POSTFIELDS => $dataPost,
CURLOPT_COOKIEJAR => $cookie,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_SSL_VERIFYHOST => false
]);
$result = curl_exec($ch);
 $data = json_decode($result,true);
if($data['status'] == 99){
 mysqli_query($ketnoi,"INSERT INTO naptien SET 
    `uid` = '".$namenap."',
    `sotien` = '".$amount."',
    `seri` = '".$serial."',
    `code` = '".$code."',
    `loaithe` = '".$telco."',
    `tinhtrang` = '0',
    `noidung` = 'dang nap the',
    `tranid` = '$request_id',
    `time` = '".time()."'");
    exit(json_encode(array('status' => '2', 'msg' => 'Gửi yêu cầu nạp thẻ thành công! Vui lòng chờ trong 30 giây đến vài phút, HÃY TẢI LẠI TRANG NÀY ĐỂ BIẾT KẾT QUẢ NẠP THẺ!', 'type' => 'error')));   
     } else{
    exit(json_encode(array('status' => '1', 'msg' => ''.$data['message'].'' , 'type' => 'error')));      
}
    }
    ?>
