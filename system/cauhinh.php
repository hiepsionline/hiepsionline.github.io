<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$_domain = 'rongbang.pro';
$tensv = 'RongBang'; /// TÊN SV
$_tientogioithieu = 'RongBang';
$_name_site = ' RongBang';
//mysql
$db_host="103.178.235.40";
$db_user="root";
$db_pass="Abcchipphuc@@123phucchip@@";/*Abcchipphuc@@123phucchip@@*/
$db_name="knightageonline";


$site_key = '6LeN1eoiAAAAAB6KBB9p7kYFJJDk7Xaj-shBFrCF';
$seckey = '6LeN1eoiAAAAAFP6dEGpWg_g921HZSX2JhnK5rVX';

$coin_active = '50000'; // giá kích hoạt
$thongbao_chay = ' Chào Mừng Anh Em Đến Với SERVER Hiệp Sĩ Online Lậu Rồng Băng  Của Mr. Chíp Đây Là SV 2  ! Chúc Anh Em Chơi Game Vui Vẻ ! '; // thông báo chạy
$thongbao_popup = ' Phí Đăng Ký 50k ,Bản Open Chính Thức';
$name_coin = 'Coin'; // tên coin
$link_anh = '/images/banggia.gif'; // ảnh mục bán lượng
$kich_co_link_anh = '90'; // ảnh mục bán lượng (kích thước chỉnh tùy ý)
$link_anh_baner = '/images/rongbang.png';
////////////////////////////
$ck_nap = '20'; // triết khấu nạp thẻ
$ck_momo = '0'; // triết khấu momo
$partner_key = '2216dfa4b2e1ef845d9f2e8d0ed2c442'; // key thẻ siêu rẻ
$partner_id = "43524503579"; // partner_id thẻ siêu rẻ
$token = '642C1F90-8ABC-DB6D-0E2F-E2FC90C0064A'; //token momo
$token_bank = '6C5CA696-AE57-9785-7D57-D57FB3B38E7E'; //token bank

/////////////////////////////
$facebook = 'https://www.facebook.com/groups/694504241790994';
$tele = 'https://t.me/+dIaFRsRUq_gyN2Q1';
$zalo1 = 'https://zalo.me/g/ctawen487';
$zalo2 = 'https://zalo.me/g/ctawen487';
////////////////////////
$name_momo = 'Nguyen Thi Ngoc Huyen';
$stk_momo = '0867893653';
$nd_nap = 'rb';
/////////////////////////////
$name_atm = 'PHAM THE MAI';
$stk_atm = '67893653482';
$name_bank = 'TP Bank';
//////////// Giá lượng //////////////////
$km = '200';
$_lg_10k = 2500 + (5000*$km) /100;
$_lg_20k = 5000 + (10000*$km) /100;
$_lg_50k = 12500 + (25000*$km) /100;
$_lg_100k = 25000 + (50000*$km) /100;
$_lg_200k = 50000 + (100000*$km) /100;
$_lg_500k = 130000 + (260000*$km) /100;
$_lg_1000k = 270000 + (540000*$km) /100;

// bảng giá vàng//////
$kmv = '0'; // giá vàng vàng
$_lgv_10k = 10000000 + (10000000*$kmv) /100;
$_lgv_20k = 20000000 + (20000000*$kmv) /100;
$_lgv_50k = 50000000 + (50000000*$kmv) /100;
$_lgv_100k = 100000000 + (100000000*$kmv) /100;
$_lgv_200k = 210000000 + (200000000*$kmv) /100;
$_lgv_500k = 550000000 + (500000000*$kmv) /100;
$_lgv_1000k = 1200000000 + (1000000000*$kmv) /100;

///////////////////////
$data_game = array(
 "1" => "http://vietup.net/tap-tin/hso-rong-bang-jar/309008|Hiệp Sĩ Bản Jar ",
  "2" => "https://www.mediafire.com/file/k4ahyvtw28yo0lq/R%25E1%25BB%2593ng_B%25C4%2583ng_Online.apk/file|Hiệp Sĩ Bản Androi ",
  "3" => "https://www.mediafire.com/file/3i1n0o3fcubi5yl/Hso_R%25E1%25BB%2593ng_B%25C4%2583ng1.rar/file|Hiệp Sĩ Bản Pc ",
);


// khuyến mãi nạp tiền 
$khuyenmai = '1'; // mặc định là 1 nếu không bật khuyến mại x2 khuyến mại thì sửa là số 2 (nghiêm cấm để số 0)
//api
$w_api_momo='642C1F90-8ABC-DB6D-0E2F-E2FC90C0064A';
$w_api_momo_id='14491';
$w_cuphap_momo='napp'; // cú pháp
$_qrmomo='img/qrmomo.png'; // link ảnh qr code
$_phonemomo='0867893653'; //sđt momo


$shopluong_api='NWsgd2zVYLwEai8HueO0x453jSpvnQAb'; // api nạp thẻ


///
//
function curl_get_contents($url)
{
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($curl);
  curl_close($curl);
  return $data;
}
//


$time_tt = date("h:i:s - d-m-Y");
$time_hst = date("d-m-Y");
 $myFile = './history/'.$time_hst.'/'.$time_hst.'.txt';