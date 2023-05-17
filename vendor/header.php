<?php
include_once 'pkoolvn_cf.php';
$_SESSION['password_pkoolvn'] = isset($_SESSION['password_pkoolvn']) ? $_SESSION['password_pkoolvn'] : '';
		if (empty($_SESSION['password_pkoolvn']) || $_SESSION['password_pkoolvn'] != $password) {

echo'<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html"><head><title>Verification</title>	
<meta charset="UTF-8">
<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/><center><b>';
if (isset($_POST['xacthuc'])) {	
$password_post = addslashes($_POST['password_post']);
				$password_post = md5(md5($password_post));
				if (empty($password_post) || $password_post != $password) {
						echo '<font color="red">Ra chổ khác chơi ku !</font><br>';
				} else {
					$_SESSION['password_pkoolvn'] = $password_post;
					$url=$_SERVER['HTTP_REFERER'];
header('Location: '.$url.'');
					exit;
				}
			}			
		
echo '<font color="green">Tao có đẹp trai không ku ?</font><br>';
			echo '<form method="post"><input type="password" name="password_post" placeholder=""> <input name="xacthuc" type="submit" value="Verification"></form> ';
			


echo '</body></html>';

			exit;
		}

?>

<?php if (!defined('ACCESS')) die('Not access'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi">
    <head>
        <title><?php echo $title; ?> - Thái</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" media="all,handheld" />
        <link rel="icon" type="image/png" href="icon/icon.png">
        <link rel="icon" type="image/x-icon" href="icon/icon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="icon/icon.ico" />
    </head>
    <body>
        <div id="header">
            <ul>
                <li><a href="index.php"><img src="icon/home.png"/></a></li>
                <?php if (!IS_INSTALL_ROOT_DIRECTORY && isset($_SESSION[SESS])) { ?>
                    <?php if (!defined('IS_CONNECT')) { ?>
                        <li><a href="database.php"><img src="icon/database.png"/></a></li>
                    <?php } else { ?>
                        <li><a href="database_disconnect.php"><img src="icon/disconnect.png"/></a></li>
                    <?php } ?>
                    <li><a href="setting.php"><img src="icon/setting.png"/></a></li>
                    <li><a href="exit.php"><img src="icon/exit.png"/></a></li>
                <?php } ?>
            </ul>
        </div>
        <div id="container">
