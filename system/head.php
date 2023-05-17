<?php
   ob_start();
   
   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);
   
   include_once 'cauhinh.php';
   include_once 'config.php';
   include_once 'set.php';
   ?>
   <!DOCTYPE html>
<html lang="en">
<head>
<!-- /*
-----------------------------------
|                                 |
| code by Mr Chíp         |
| Không xóa để tôn trọng tác giả  |
| zalo 0867893653                 |
----------------------------------|    */ -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=$tensv;?> -  Hiệp Sĩ Lậu</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="zalo-platform-site-verification" content="UDs43lhSAYy4y94as-C-2mJAY3NekrzkCZS">

  <meta name="description" content="&#272;&#7893;i nick c&ugrave;i l&#7845;y nick vip t&#7921; &#273;&#7897;ng, d&#7883;ch v&#7909; si&ecirc;u l&#7901;i">
  <meta name="keywords" content="&#272;&#7893;i nick c&ugrave;i l&#7845;y nick vip t&#7921; &#273;&#7897;ng, d&#7883;ch v&#7909; si&ecirc;u l&#7901;i">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="&#272;&#7893;i nick c&ugrave;i l&#7845;y nick vip t&#7921; &#273;&#7897;ng, d&#7883;ch v&#7909; si&ecirc;u l&#7901;i">
  <meta name="twitter:description" content="&#272;&#7893;i nick c&ugrave;i l&#7845;y nick vip t&#7921; &#273;&#7897;ng, d&#7883;ch v&#7909; si&ecirc;u l&#7901;i">
  <meta name="twitter:image" content="/image/nro1sao.png">
  <meta name="twitter:image:width" content="200"> 
  <meta name="twitter:image:height" content="200">
  <link rel="icon" href="favicons/image-nro1sao.png">
  <link href="/css/css-bootstrap.min.css" rel="stylesheet">
  <link href="/css/css-all.min.css" rel="stylesheet" type="text/css">
  <link href="/css/css-main.css" rel="stylesheet" type="text/css">
  <script src="/js/jquery-jquery.min.js"></script>
  <script src="/js/assets-sweet.js"></script>
      <link rel="stylesheet" type="text/css" href="/css/assets-sweetalert.css">

  <script>
    var login = true;
  </script>
  <head> <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1174212721905219"
     crossorigin="anonymous"></script> </head>
</head>
<body class="bg-light">
  <div class="container-fluid" style="padding: 0;">
    <nav class="navbar navbar-expand-lg navbar-light bg bg-dark" id="nav">
        <a class="navbar-brand" href="home.html">
          <img src="/images/rongbang.png" alt="Ninja School lậu" style="width:100px;">
        </a>
        <button class="navbar-toggler bg bg-light" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="padding: 2px 6px">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item text-uppercase font-weight-bold li-item">
              <a class="nav-link a-item text-uppercase font-weight-bold btn btn-outline-light text-uppercase font-weight-bold btn btn-outline-light" href="/">TRANG CHỦ</a>
            </li>
            <li class="nav-item text-uppercase font-weight-bold li-item">
              <a class="nav-link a-item text-uppercase font-weight-bold btn btn-outline-light" href="/download.html">TẢI VỀ</a>
            </li>


            <li class="nav-item text-uppercase font-weight-bold li-item">
              <a class="nav-link a-item text-uppercase font-weight-bold btn btn-outline-light" href="<?=$facebook?>">GROUP FB</a>
            </li>

            <li class="nav-item text-uppercase font-weight-bold li-item">
              <a class="nav-link a-item text-uppercase font-weight-bold btn btn-outline-light" href="<?=$tele?>">GROUP Telegram</a>
            </li>
			<li class="nav-item text-uppercase font-weight-bold li-item">
              <a class="nav-link a-item text-uppercase font-weight-bold btn btn-outline-light" href="<?=$zalo1?>">GROUP Zalo 1</a>
            </li>
			<li class="nav-item text-uppercase font-weight-bold li-item">
              <a class="nav-link a-item text-uppercase font-weight-bold btn btn-outline-light" href="<?=$zalo2?>">GROUP Zalo 2</a>
            </li>
            <li class="nav-item text-uppercase font-weight-bold li-item">
              <a class="nav-link a-item text-uppercase font-weight-bold btn btn-outline-light" href="/nap-tien.html">NẠP TIỀN</a>
            </li>
          </ul>
          <?php
          if($_login == null)
{?>
    <ul class="navbar-nav ml-auto">
              <li class="nav-item li-login">
                <a class="nav-link text-uppercase font-weight-bold btn btn-outline-light btn-login" href="login.html" style="color: white"><i class="fas fa-sign-in-alt"></i> &#272;&#258;NG NH&#7852;P</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase font-weight-bold btn btn-outline-light btn-register" href="reg.html" style="color: white"><i class="fas fa-user-plus"></i> &#272;&#258;NG K&Yacute;</a>
              </li>
            </ul>
            <?php }else { ?>
              <ul class="navbar-nav ml-auto">
              <li class="nav-item li-login">
                <a class="nav-link text-uppercase font-weight-bold btn btn-outline-light btn-login" href="/user.html" style="color: white"><i class="fas fa-user"></i> <?=$_username?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase font-weight-bold btn btn-outline-light btn-register" href="?out" style="color: white"><i class="fas fa-sign-out-alt"></i> ĐĂNG XUẤT</a>
              </li>
            </ul>
            <?php } ?>





                    <div id="bottomHeader"></div>
        </div>
      </div>
    </nav>
  </div>
  <div id="endHeader" style="margin-bottom: 5px"></div><script>
  pageIndex = 1;
  pageServer = "0";
  pageCost = "0";
  pageHt = "0";
</script>
<link rel="stylesheet" href="/css/css-nick.css">

<div class="container" style="padding-left: 3px; padding-right: 3px">


<div class="container" style="margin-top: 50px">
  
<!-- /*
-----------------------------------
|                                 |
| code by Mr Chíp         |
| Không xóa để tôn trọng tác giả  |
| zalo 0867893653                 |
----------------------------------|    */ -->